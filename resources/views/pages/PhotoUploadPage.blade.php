@extends('layouts.DashboardLayout')
@section('content-title', '照片上傳')

@section('dashboardContent')

<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs-core"></script>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs-converter"></script>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/blazeface"></script>
<style>
    .upload-img {
        display: flex;
        justify-content: center;
    }

    .upload-img img {
        width: 80%;
        height: 400px;
        border: 1px solid;
        border-radius: 2%;
    }

    .upload-bt {
        display: flex;
        align-items: center;
    }
    .face {
        /* height: 400px;
        width: 400px; */
        border: 10px solid red;
        position: absolute;
        z-index: 1;
    }

</style>
<div class="container">
    <div class="row" style="margin: 45px 0;">
        <div id="upload-img" class="col-9 upload-img">
            <img id="blah" src="{{ asset('img/1.png') }}" alt="your image"/>
            {{-- <div class="face" id="face"></div> --}}
        </div>
        <div class="col-3 upload-bt">
            <label class="btn btn-raised btn-primary">
                <input id="imgInp" style="display:none;" type="file" onchange="main();">
                <i class="fa fa-photo"></i> 上傳圖片
            </label>
        </div>
    </div>
    <div class="row" style="justify-content: center;">
        <form style="width: 80%;">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>1</option>
                  <option>2...</option>
                  <option>3...</option>
                  <option>4...</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Password" style="height: 41px;">
              </div>
            </div>
            <div class="form-group">
              <label for="description">描述</label>
              <input type="text" class="form-control" id="description" placeholder="1234 Main St">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
    </div>
</div>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#imgInp").change(function() {
        readURL(this);
    });
    async function main() {
        console.log('main')
        // Load the model.
        const model = await blazeface.load();
        const imageBlock = $('#upload-img');

        // Pass in an image or video to the model. The model returns an array of
        // bounding boxes, probabilities, and landmarks, one for each detected face.

        const returnTensors = false; // Pass in `true` to get tensors back, rather than values.
        const predictions = await model.estimateFaces(document.querySelector("img"), returnTensors);

        if (predictions.length > 0) {
            /*
            `predictions` is an array of objects describing each detected face, for example:

            [
            {
                topLeft: [232.28, 145.26],
                bottomRight: [449.75, 308.36],
                probability: [0.998],
                landmarks: [
                [295.13, 177.64], // right eye
                [382.32, 175.56], // left eye
                [341.18, 205.03], // nose
                [345.12, 250.61], // mouth
                [252.76, 211.37], // right ear
                [431.20, 204.93] // left ear
                ]
            }
            ]
            */
            console.log(predictions)
            $('.face').remove();
            const offset = ($('.upload-img').outerWidth() - $('.upload-img img').outerWidth()) / 2;
            for (let i = 0; i < predictions.length; i++) {
                const start = predictions[i].topLeft;
                const end = predictions[i].bottomRight;
                const size = [end[0] - start[0], end[1] - start[1]];

                const faceId = `#face-${i}`;
                imageBlock.append(`<div id="${faceId}" class="face" style="top:${start[1]}px;left:${start[0] + offset}px;height:${size[1]}px;width:${size[0]}px;"></div>`);

                // const faceDiv = $(faceId);
                // faceDiv.css({
                //     top: `${start[1]}px`,
                //     left: `${start[0] + offset}px`,
                //     height: `${size[1]}px`,
                //     width: `${size[0]}px`,
                // });

                // Render a rectangle over each detected face.
                // ctx.fillRect(start[0], start[1], size[0], size[1]);
            }
        }
    }
    main();
</script>
@endsection