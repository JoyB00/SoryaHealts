@extends('user')

@section('main')

<style>
    .star-widget input {
        display: none;
    }

    .star-widget label {
        font-size: 30px;
        color: #444;
        padding: 10px;
        float: right;
        transition: all 0.2s ease;
    }

    input:not(:checked)~label:hover,
    input:not(:checked)~label:hover~label {
        color: #fd4;
        cursor: pointer;
    }

    input:checked~label {
        color: #fd4;
    }
</style>
<div class="container p-5 pt-2 ">
    <h2><i class="fa-solid fa-pen me-2"></i> Testimnoni</h2>
    <div class="row">
        <div class="col-md-4 col-12">
            <img src="{{asset('images/foto_testimoni.png')}}" alt="" class="mx-auto w-100 my-5">
        </div>
        <div class="col-md-8 col-12 card">
            <div class="card-body">
                <h5 style="text-align: end;">Berikan Rating Apotek SorYaHealts</h5>
                <form action="{{ route('testimoniStore') }}" method="post">
                    @csrf
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <br>
                    <div class="container-comment mt-3">
                        <h5 class="">Berikan Ulasan Anda </h5>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="ulasan" style="height: 200px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                        <input name="rating" id="rating" value="0" hidden>
                        <button class="form-control btn btn-primary btn-sm rounded-pill mt-4" type="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var rateInputs = document.querySelectorAll('input[name="rate"]');

        rateInputs.forEach(function(input) {
            input.addEventListener('change', function() {
                var selectedRating = document.querySelector('input[name="rate"]:checked').id.split('-')[1];
                document.getElementById('rating').value = selectedRating;
                // Menampilkan nilai rating yang dipilih pada console
                console.log(selectedRating);
            });
        });
    });
</script>


@endsection