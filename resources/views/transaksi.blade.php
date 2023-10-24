<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles/login_style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .wrapper {
            height: 400px;
            border: 1px solid salmon;

            display: flex;
            overflow-x: auto;
        }

        .wrapper::-webkit-scrollbar {
            width: 0;
        }

        .wrapper .kotak {
            max-width: 110px;
            height: 110px;
            line-height: 110px;
            text-align: center;
            background-color: greenyellow;
            margin: 20px;
        }
    </style>
</head>

<body>
    <!-- NavBar -->
    <header class="p-3 text-bg-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="header-logo">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"></ul>

                <div class="text-end">
                    <a href="/" class="OTWLogin">
                        <span>Login</span>
                    </a>
                    <span class="verticalLine"></span>
                    <a href="/" class="OTWLogin">
                        <span class="setting-svg-container">
                            <svg class="setting-svg" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25px" height="25px" viewBox="0,0,256,256">
                                <g transform="">
                                    <g fill-opacity="0.54118" fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <g transform="scale(5.12,5.12)">
                                            <path d="M47.16,21.221l-5.91,-0.966c-0.346,-1.186 -0.819,-2.326 -1.411,-3.405l3.45,-4.917c0.279,-0.397 0.231,-0.938 -0.112,-1.282l-3.889,-3.887c-0.347,-0.346 -0.893,-0.391 -1.291,-0.104l-4.843,3.481c-1.089,-0.602 -2.239,-1.08 -3.432,-1.427l-1.031,-5.886c-0.084,-0.478 -0.499,-0.828 -0.985,-0.828h-5.5c-0.49,0 -0.908,0.355 -0.987,0.839l-0.956,5.854c-1.2,0.345 -2.352,0.818 -3.437,1.412l-4.83,-3.45c-0.399,-0.285 -0.942,-0.239 -1.289,0.106l-3.887,3.887c-0.343,0.343 -0.391,0.883 -0.112,1.28l3.399,4.863c-0.605,1.095 -1.087,2.254 -1.438,3.46l-5.831,0.971c-0.482,0.08 -0.836,0.498 -0.836,0.986v5.5c0,0.485 0.348,0.9 0.825,0.985l5.831,1.034c0.349,1.203 0.831,2.362 1.438,3.46l-3.441,4.813c-0.284,0.397 -0.239,0.942 0.106,1.289l3.888,3.891c0.343,0.343 0.884,0.391 1.281,0.112l4.87,-3.411c1.093,0.601 2.248,1.078 3.445,1.424l0.976,5.861c0.079,0.481 0.496,0.834 0.985,0.834h5.5c0.485,0 0.9,-0.348 0.984,-0.825l1.045,-5.89c1.199,-0.353 2.348,-0.833 3.43,-1.435l4.905,3.441c0.398,0.281 0.938,0.232 1.282,-0.111l3.888,-3.891c0.346,-0.347 0.391,-0.894 0.104,-1.292l-3.498,-4.857c0.593,-1.08 1.064,-2.222 1.407,-3.408l5.918,-1.039c0.479,-0.084 0.827,-0.5 0.827,-0.985v-5.5c0.001,-0.49 -0.354,-0.908 -0.838,-0.987zM25,32c-3.866,0 -7,-3.134 -7,-7c0,-3.866 3.134,-7 7,-7c3.866,0 7,3.134 7,7c0,3.866 -3.134,7 -7,7z"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- End Nav bar -->
    <div class="hero-Transaksi">
        <div class="container">
            <div class="row justify-content-center mt-10">
                <div class="col-md-12"> <!-- ukuran dari form pembatas -->
                    <div class="card mb-4 p-4">
                        <div class="row m-2">
                            <div class="col-4"> <!--konten kiri  (gambar)-->
                                <div class="row">
                                    <div id="carouselExampleIndicators" class="carousel slide">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH-wkjIdM8fR73nVqwMsxLX8WyOnjr8l82bg&usqp=CAU" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUWFRgWFRYZGRgaGhwdHBocGh0cHxwcHBwaHB4eIRocIS4lHh8rHxwcJjgmKy8xNTY1HCQ7QDs0Py40NTEBDAwMEA8QGhISGjQhISE0MTQ0MTQ0NDQ0NDQ0NDQ0NDE0NDE0NDE0NDQ0NDQ9NDQxND8/PzQ0PzQ0NDQ/PzExNP/AABEIAMIBAwMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAACAAMEBQYBBwj/xABBEAACAAQDBQUFBgQGAQUAAAABAgADESEEEjEFQVFhcSKBkaHwBhMyscEUQlLR4fEHI3KCFWKSorLCYzM0Q3PD/8QAGAEAAwEBAAAAAAAAAAAAAAAAAAECAwT/xAAhEQEBAAMAAgIDAQEAAAAAAAAAAQIRMQMhEkEiMoFhUf/aAAwDAQACEQMRAD8AnMwqPOp07oaUgnhf6wZUj+o+tfCANbVND3bxx7o1QacNXTpruPPvhFARXTod/oQm313bib+EdQHWvrrARhWqTxuaerwWapoF6/vXrHXF/pp3GOuDWtbaW4QG4w1CjxPMcIGb2aEHTjy+cdNaCvGh7oAqakWpwpvvWAnXbvpenj+8AXBNKb+GvqkdLkgXodwpqOUJabx69GA3BY7j10gWTlfXSkcEzcK38rcISPQm/lAHWINK8d1hofDdAy7VFt3jwEEWJFKaDX9IjYvaKSuyW7RqQqirG3OwHM0EIJTubgmg4d0V2J2hLBKEgV1JI4Dwii2jt407DBe+ra7+HS8ZqdtB2NzXrCuRzFt8RtqUqjMa8CL5gd/Ijn+kTMNiFcBl+EjnY0rSPOPeEajX1wi4wO32RQtFpzr11g+Q+LYsoIBGnPfekNF6GgoTfrrFTL9o5f3xu1F/LWLDD4uW4qrA13D1pD2Whu3lv4w07UN69Kc6b4dZRWm7hwr6+cNTUpQC/wA+kBG3met+ghqcfOnyh1qXHCGnWm++75QANDSsNOsOs1u7vhpz8oAbfTp9YbalofbpDamvrfADRT94ZOsPNryhpoRgcaQDCDJgIA5SFHPGFAHsR2ZMIoQlObt8wkNjZU3fk75jW0/8UaIpz1gWS1u4xWwo/wDDnoOwmm52+qDjDB2XM3KALaNfzGkaJl8OkERahFjAemYfZjhq5CSeBX5FoE7OcfcbXilxa3xxpssCWFYQ1GYmYCZY5COfZ+jaxz7C4p2T4a+EaZk3GnAHrHCBT6QyZk4J9Mp/0sfPLDZwbUurH+xx/wBY04G6BZh4evCA9MuMK/4TpaoP5Q2cO1t3rmY1bcvnETH4pZaO7mgQVJrCJi9tbRaUMqlc7/CNyjQu3LlGI2hixVgjs5auZyKFuQOp8hyhzbO1HnTHdq5ntlqewu5R3E1tviHiZIQBPvn4uX+XTWItVITSFZlUHRQWbUDsitBvvbrBTZiIoCpf8TajuFvOGJakk+PgPXjCmgntNvsO6EaMzE3JgYJoNpTBQxFmJoeNNYAbBg5U5lNVJB5RzIa0jlIA02y9t5iEexNg1bE9Nxi9FSAa6aWjzwCNP7ObXowSZUqTY8OIp4b4qZJuK3Zfzhp71N+HrzjS/ZEYBhQ1pDR2al7d1qddIotM05PoQLeq8Y0LbMU7j5flDLbJXdXxH5QEoa7oBjF4+yRu+cMvsgej+sBqVieEA1DF1M2SePkPziO+zCDqb8v1hBUsIEiLRtlnjANs0wBW5TwhRppWxyABn8uN4UA9tsuYVufG36GsNu5rUFiRprvh2Y9jbw+fWI8xai5N+6nEkUig5PmvSzNXmT9Ib+0uKDManS5/PjHJqWAvu013+P6QFt9jTU0HPvgB37Udc5/1GGvtL1s7Dj2jx66wzlIqdPG8NGtaHj5CnhAEv7W/43P958oFsbMH328YZRNa930MHQfEb+uEAg3x0yg7d/6jp4wvtsyg7ZJ333VhhpfEa/tA6cbm1tOsIJD7RmUrnO7hvjIe1u35jfyg1RTM1abr/r6MaWa4y1JoADX6n1wjzrETw+d2BOY0pcCm4VrXhCyOImGlnMGpUnTmTEhMNnE13ahQAiv3mJygD1aLTCS0VUfeksnj2wHe/l/p6QOD2f7wV3MspR/W9BXuGc9RGalUskhAK3c0ruyiv1Nf7Y7j2VmCp8KqFB/FStWPU17qcIttvIhdEl3ot9127S9wBEXfs97MpNRS1xnpTTMdLkaga05gQKk2wuIkgEKtTYdSSNPGNlO2ErzpWFWtJctnmHgXChRX+ojxMWjbDl/bBNagkSxntoElKoUAc6L1LRb7FkFcNiMY60mYgllFLqhBSWo42Ne8cIVVjI8xxEhftLgWQM5t+FQzDXpFdhMOXdVG8geMXOMlH+a51c5VFL9pg7f7RT+6JXsxs4nEAEWqynlRR+cGy1uqDH4Uo1OIr5kfSJGDUjtjVSDQ6aCuvf4RpNubKLph3UVLK4/0st/FjEOTs4rJdzQU7JB/ELr4j5Q8Symlxs/abhcgpQDhyiSdrTNKLprQ/nFHs2YDvtp3iwPeInRqyTjtV+CcdD+cAdquK2XwP5xXsd3C0Czbh69XgJObarbwvn+cc/xR+C+f5xWNCA0v+0AT22q/4V8/zhv/ABJj91fP84hOaX8o4BAEw7RbXKvn+ccG02/CvnEIwMAXX+PTPwJ4N+cKK3J6pHIFaenvpccPnDEy1z387RIYHXTfDE4a214/rDJFatjWnn4QwZda1JN/Rh15W+p5Ur6/aCUUGu6kAMvLr069LwDy78fWlYdrQE+qQ3WpA3eMAcOh5+u6ErVHr5wnTQnXw8o4i1FN/LfzgBTBztXv/SGypPlDxAGgNevyhgmpNBTnCCq9qMWqSGWpzP2Rxoa1N+VYwisSlCLXI46W6xf+1mIR3yp2nU0sbIAb7rlm37gvOKLZkyk1K0ZQdDoag6xF6qLczFZGdRlDKqqOiUc9KmJEhQkhFAAaYoc0135TyJVhbpETAYVmfI1qKRcgUCoW6aV8Ymez6/acQiEUpLy8uwgQHyrE7VJtARWZy29rAniQAPIxutsYpMFIyCziXkQC3bctncnqWb1bJpLyFQ1iKgjgQWU+FFj08ezmGx0qS84NorNRqFioYEEi4FSdOEKtMOVlvYpHxMv3bCsoE53O/SiLa9N9OHSJ3tl7TIrphpKh2DDsr+LQIKeqmNvi9moJXupX8pcuVcoFFH+UaCMfJ9h0ls8xHOdgwV/iKBrErX71K31uYXymzmN0oMDs5Zz0fUVZgAKDLQUrzoBbjFjsrZyo/vWIFXd+gIah6Za+AidM2MZEghAQ75UBuafe+iivUxHnSirCXfRF6WzMf9KhP7oLkcxDteekiTUr/wCmVAH/ANhVqd1zGE21tjOCVFFY3G7MAKmnf5xo/bnGqUdRWjZG0tVezQHkpHnGCxcukpG/EX8so+hh4s8p7WOxsUKstOB4erkxdob14/vGew8oyzLY3D0FBrcA06xpFuLbxGkY5dNvQdYDzg5guOMLN4xRGWXW/wCsCm6kJhxjgEAdcDXWOMbb46WpDbtygDkEpv3wBNo4huO8+UIH+1HIWaFDN6czU1gH4Vp61jrls3K/P1uhhQ1wdDwtDBuaedeHOBV6daftHXC0PIQ2zfre0AcL114QLE9KbtN0IPuPj+cDMNKa3+UIE+avy3U/OOZ6agd0E5tff68IF2oL0obD9+sACxqdB3WoYamuAreUPOorXhviBtV8kt3pdUZhXfQGnW8AUmwdnfbTMCN7pcwZ5hWpOdWIQCo+8XNa8IgN7N/Z5zrOdSqVyslyxpVDl3Am3dwvGw/hs2eViBTKc6gcaBSoPipH9sRfb7ZqSckxGpmqjqTUkEZaivDNWMPl+WnRcJ8JlGRwEzJMlmmcGYimv3q1U+Nz4RpvY+Wom51FAJkpTyDrM/7sgitwmDQOlVJAdSNAAVIsSSK1FaUvWkWuwkKScUzUzDJQD8aEBf8AegEO8Rj1B9pcoxL5T/8AKbeEajY21cSkgCWgyywzEs1KrmNQLEk33cDGT2LgHxWILUr2teLEn9+6PYcPsdAioQKKoAtyvCv1GuH3WX2R7TYjEkqspWyhmIVjmopPZysoGen+alxe9tDs7E56W18uXWCl7MWWW932c1iRavDQRIwckJU761qb34xGUn00x3JdpuKQBd0VkrCK7MQorvMPYqdVTrFXiZbzMMyS3CMxOZqkaWpYab/CFPdLVkDj8NhzVXVGsahgpsP384819uMBKzyUkqFCg1UaAbrRo8NshZUiaJ655jGqlVPZoWaqsNNdK7hGRxMl0LZ7n3YYX11t1i8cdXrPO+uM/iM1VX/NUDnUiNLK1IPE8Yzr4vO6kgDdy1N/ONBnrQjW1hzjbFz5Dbffu6Q2SOPqsdcdYbIvaKS47QLU43pBMp5fnAn1SAAJMKO90C0AcYWjsn6fUQLLaCkjXqPr+kBw7CjleUKDQeoP+Hr65xFVt1oPNztu6bvXOGZgoKm9PQhh0nzHdaGHa9KflCz1HKm75wm6+W+0IAIubV114dOtYALThpTU/WEhO87tTb9IF9SKEnru3QB1EAHH1uht6V+Hp+0OLTTzjhDE2pTWvnADZQ0PAn1vii9p8UVWgANcopxFRbyPjGjmOKHh63CMR7Rzf56ANTQk8KmgHDT5wrTix9itpvLxmZyMk3suo0Us7uByysfBjGg/iPiu1KVZQfsPmDXUqMmY62anheMHstlMw2yiia7wAoYnm1SfCLvE7eeZLdWXNNRHAfeVCMC55ga+MZWe9tZl+OqJXCASmCkO4FSpNirAGo0GYrUa8+LuwcU5lTUma+8Cb7EhiNb2aA21NRnkscuRvdzctLKxyEigvelKCIwxIKu6D4ysw67g2YX5iDZa916B7DYFEBoNL97Eg/8ACNyyjLGG9jMTmz3/AA+Zdv8AtG1w72vC37sba/GUw0DNSgvD8wXtEbEPQkkFqCygVJ5AcYyq5TWQEGK7DHK7purXxieuNAFWTLb4WpUV6GIOGXM7tSxAp4n8z4QRQMSgNax5h7ZOExK00yCo5Va3hHqGLsDHjvtBijOxLkHshsg/tFD/ALqxeHWfm1MYqMXhwjgroACR3kedPOLvAzKgEXDCKsqWmMNQM191FOvlEjY7dlr2BNO+N45KtWYDW8NsNSYMm/fDT8uMUkmgGOkdJMcYwABjjR0GG2YwAJMPShpzJ+QiOYky9B0+phGKsKOZzChh6ROO6tgf3iO1CaacenDpEgqaHmNOvXlEYrTdprca/lDAUWld9fIwpqW7I06wTrpXyEMixpanSEAum+/X9IHJ0pTxjpNDW3r0I6h4jSABFdSSBxN77oTPQU374D3lDSnrvgwfrytCBnETqDtCmprTujHTMTLYu8xKhiKc8oY916DpGk22SqHLxHO9a/IV8IwrzCZqot/ujNcVK006nyiaqO4QBmY560lob8cotzobd0TZOIyOpBv2lI3UaqkE9K+MVYc5UIWlE5doq70NtbEC/wCHhDuEo81Rm33N6VrXw3QjWXs7MZJuT7+cBTQGjEla9RSo6RpNh4Ie5yHVZbk9X94tB0NYzeBRDiSV+Bc8zW9EQgX45qX5xcS8Xllvc1KW5kMGF/7iImrx6tvYbGsmIRD8Lqyf3Lp/x849WQx45smWROkU1Vx/yH6x6+piMutceJFBDE51GvdELaOMdF7C5j8ucUUzGYo9pR4foInrfx+G5e9rnHT07WYEEUpUUhYactLcPGMvjdoTmFXBNuPiaUiRsSe+VswIANRW1iPlrBrSvL4rhJS9s9qCRh3cfFSi/wBRsI8dk6anMTQcyaCtfO/GNJ/ELapmzVlKarLuafiINPAVPfFDsyXSYhZaqHFtxI7VD4RrjNRw55fKhDmWoUfG9a8qWAix2XJyJxOvfDIkLmluO12mU6WZeXcYlyBS3Mxpiyp5r1rDDGnSJBbyiO7RSSY8IFjzhB/QjhgBZoaZoR1jjmAwZolS/laIdPOJa7zxhB2jcvAflCjtfVIUMPQfebrEcYbz6EeEEaaejSsMsL0zW6XgU7McUF/Qjjbt8J1JIUHp8jAgmwrpwgBFl4jwPdeGzWhoa6dKab9IFm1G6OueNu7x+UJJF+HDnHfhBNqC8Nk0Fj4fQd8NTTVSOII5wqpV7ZxIAprlpfmb18BFE2zRnEyYQFLLXmKit90P7dnEGm9qG26gK6d5irnYia1FuVuadBTwpTyhHIj5MoUhbMXVSTrQilt1K0tqaw/sWV/McUPZVzUDQkUUnv05wziqZVolCXc1J3EghQNygEHqTFhgPhzBQzFXpQ3ze6cBstdMw4bzCAcMwAm1ALHDtlvpTKxa2tlMWONJRJBpTNkr1Ck+u6KvZLVnI2UlBnBAvVSjki/eIu9pYUjBYZjcnIwOtipB+YicvpeM9Va+yEsNNBJrlynXnVR8/GPT5cyo1jzH2IwudHcEhswoRw3DpY+EbOTiHT4xmHEflGOd9t8J+LQ+7zCkQZuz5insvQcDeHMJtFGFQwMPTsdW1oUaY5ZS+lDi9mOwozinIGsUftRtxMJKot3YUVd559Itvan2hl4eWWZr/dUaseAH1jxLae0XnP7xzVibDco4CNMJb7rLzeW31tI95mIdruWqTvJJNb6bzbgItMLPXOE0FG3D4q1Hyp+8VGErmOtKVOmmlIektmOemgqR0qfleNXMm7FcFmljs5iCOTGgB6g/WHZU4NW1CD2hwINCPH5Q0tQ6ziKLMJAIpqK7t11MKUf5kw/iave1zFRNTGeukASIVt0A7wyImAvHc0CWgJxobYcYcJtDZgNxT2h1+USRpr+kRkFz0Pnb6w+osIAKvKFAV5jyhQw9AJG/hCLGpv049KdYClacfR1EN0vwpruEAGX7qD8vOEreN/CBmWO4Dl5+uUcD35fOEHAo0Nzx50juWwvCD+rQOe/Df6ECgtuqLawxjCMtAdbQ879TEHEzNGJBC7jzv8hCoZPH4we8diKgEKotSin9vOIzY1WdM+gYAkfhBBOnTziDinq7HmzRHAOtP3iVLXaUoqqFnqxFtMoU0NjvNKQ1gMeVNK2VWAFBQgkNSouSaZb113QsdlKLlU6LUtqWyAdkcKjyi0w/s68uR9pdasrKwQioyhhXMN9tRwhWyCS1PwuzlSR7w/CuYmhK5gzmX8QNdGB7onmU32BFmD4GIvuyllHkRCxODd8HLlt2QaBjoMqMSbcgoNOUSFZnwSE9osrOT/S5bvrSkRb6aye/4kewrZJszDnfde756xvylRGGwuEKTUnj8aknk4NdOdo3DvGeXWuEVWPwyG5W/EVB/wBQoYxntBNmy5bOk+atKAANmFSQNSCd/GNviQTaM1t/CBwssb618DBjRn/jyvGu7NmmMzE0OZiSb3iKpvGh2vsh0YgCuVQ3VeI40+kVeHm5RQqrKdQQK9Q2oPlG8u+OWzXQpO7Qy8uWnowSzSKjjwtG02d7KSZ8v30qYWBqKEBSjb1IUa6fTWMrNwjCYy5RmStVFSOyaE3538IUuzuOj74guspSoVVSzVJJKsVY60Gp3d8ScCvxNvJJHrpC2Vs155aWgCmUHqSdQ7WHkfGI+Jw8/DPlmL2dxGncd0XMpvSLjepraQG+OJMBUEGxjrPFJcB5RwtHC1YFmgDjNAO0E2kAxgA039w9eEP1hlGt3/T9YcrABX4QoH3nPyMKAN9NJIsfVrwElSDyPrWOBhod3LWOBue+w+Wu+GosRfluH6RxHrodPG0JwSeNPV4aY7h41hJE73HE+u6OLY19frA5jvFelvOG5jmvCBQmmVt86RU7TaiEaV/I1ia8zju394il21iqA3uez428YVKM08oszHrXu/WkMulLUIveuvqsbHZPsq83KWqiWJt2m379B1if7U+yyJhw8pby/i3lkOpNdSCa+MZ/Ob01+F1tm9mYpUaTMmICq5dDUlQXVmy1rmGteVI9U2vLT7NMYNRfdOwddy5SQwpyvHkCYfNLBAupArQmlWax3gEEUN70G+NVsTbrHBYjDNXPLkzAldchU1Xqt6cqcIWWO9U8ctbh6Q+fZZaYGY+9KggkMczEfMmJ/s5g2OGVXFCECdwLAinWkGyu+zcqPRlZTnaxqsxWzH+4Ew57N4gjBo0xqsVck1vWpqK79xibxc7/ABd7EkB5Kht4ZT5X8qxOw7sUAb4l7J6i3nr3wthyQstB/wCME9TBtKImPwOVvmP+sZ5NcaadN8VkyTVy3DSLtlqIZfCgxMOzalxezlmBctVdaXFOfEczGC9r/Z/3GWapBV2IYAZaNSoNKmlaGvMR60kkCM77WYP30iYgFSFzD+pe0PlTvjTDLVZ54zTD+w22vs+IyOf5c2itX7raI/iaHkeUWftLhRKxKTCSMzZX4WND3UynuMYennG+mt9rwHvbGZLUI/Esn3hzZMtesa2e9sZfWhexy+7x81GuHzrWmhUllqd+ZDmr14RqPaXYyTZTBlrbv5HrHns/asxWkYmUQHWV2wfvGW7KQePZZe4mPU/tqTJSzF+GYisK8GUH6xN7s5/x4oZbSZhltvup4+vnEljWNN7Q7HE6W1B21JZT9O+Mhgp2Zb/EtiI1xy2yyx1UkwBaCUR0gRSTZgaQbtWArADyaDp9YMw1StOggu+AF3Qo5CgDdtMLWp374GZv5evpDWa/1r5xwGt7GunjBtR5juB6VNYbmECl+vCOGZuA5QJBvXjwrAkmJrw06RGd6g/ODnOB8oWGkNNYKo6nhBdQ5NojIWIVASajTlF1sT2cynPMGZze+g6D6xotk7ERBpc6mLxMKKRzZ+TfqOnDxSe6rJMim6HZmFDqVYVBBBHEEUIiwMiAKUjONK8O2tsx5WdRT+U4Rqha0HwtXfmDaf5eVqzBz2Rs66itO8U+RPjF57VOPfz61vOcKQeSZiNPwgEHuimbtzBSnaYWAoAx1FORjpnHLet77MYR52HxKsxZc75Tc5gyqw87xC2CrthllgEAzaJU1ORkE0332NO8RZ/w52v2J0gkZ0TOn+YBchHUEL4mGPYHDvVUYglVqBwrkBrwIqREWda433G2kyiCDyp3Wg8RKYEMOY7tfpE2UtLcvygXW1IysbyoiMaw45tAote6OsIlZl3iK0reYlgR10h7Z14ZtnCe6nzJe5XNP6T2l/2kRY+x+1BKmsj193NXKeTD4DfdUkd44RYfxHweTEI+6YnmhofJk8Ix8ytI6Z7xct/HJOndgOnZzKzhRluwagFLbqVvxjd+zG0FbDqitUKaDkCA2UV3AsR3Rh8Tii5Sco7WVQbA0dKCvfRD/cRFv7HTuyUF6NWvGv7ROXDx63AQZY8y29K9ziWIHZY18f1j0q4W8ZT2rwIcIaXqR4j8wIWN1RlFFKmhhVbjjCMVmGmFDTcYslfQxvLtlY4X5QFSYJobS5HrSAkjUmnGOsTAKYLNSBRZoUKvT13RyH6DZogAN/Pyjrk7qj1SOZBSp36jWBDUHPTXd3Qg6mlY473qb23fWOB+OlvQoYaZjx9d0ABOelL/AKRrvZvBZUBIubmMtgJWeYq68eFB+seh4CVQCMPNl9NvDj9rCQoiUEgJAiYqxlI1yqMUhqYkTHERZphp3t4b7QSy03EplJYTZrLoFXtqxvuLLQcyRvigwwIYlVzFVZqcAAat3C/dGr2yqmdPR83axTZkF2cMaIAeFAGpcCgrrGWwyHM4JIHu3zU/pNO7NljecY5dP7HxzSZqTFNCpvwKtVWB5ZSY9B/hwhzPM+47ui1FDRBJvbjQx5gyn4Rv+seo/wAPcewf7NMK51UulLVtLDLbeAAed+ELLgxvt6FiJfLSI+XvieyxGeXGNdEqMFAJ7vy/KAmJWJRSByxOlSoapBmXEgJCeiqWYgAAkk6AC5MGha8p/ilMHvpKb1lsx/vYAf8AExhSIuvanan2nEvNHwE5U3dhbDxu390U5EdOM1HJld20azKGzZQ1mNK0B5dfkIs/ZzEFMUAOyGWjCtRmy1NO+sU4FCCN3owQxeR0dRTId2+5/wCppBYJXqoeoiu23Lqh5EHwMN7L2gHQHjE2amZTGTXrzjEKM5pxMTMPhXb4Vtx0HjBNJVGV20zkUpXj51h+ftY0oi05tc+Gkb48YZdEuzQoq706WHiYdwu0JaEhVrUXNN3fcxTTMQzGrMSesdlHWKS0QlyJwt2W4ix7xETE7GdboQ45WPhpFaLX06ROwm13SxOYc9elfzgCH7thqh8DCjQDb0vep8P1hQaPadL+91/OHzoekKFCNE3d8C+hhQoAtPZ34z0HzMbjCwoUc3k/Z1eP9VrKiUsKFCgy6F4hYmFCgpR4z7RuRNxdCRSclKGlOyIo0/8Ab4g76yhXfTMtqxyFG84xvUXCfGn9Sf8AKLHZk1hjpRDEH34uCa3Zq35woUFKdfQzQy3rzhQoxreGzAb4UKEocZP+JbkYBqEirqDQ0qM2h4iFCh49Tlx4xAmOwo6HOBoawg7Tf0P/AMGhQoVEbrYijKlvur8hGlX4D0jsKML1vOMRt7/9D/xikGkdhR0Yfq58ugEPS/qPrChRSTjwuEKFCnQbhQoUMP/Z" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
                                            </div>
                                        </div>

                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                        <hr>
                                        <br>
                                        <br>
                                        <div class="carousel-indicators justify-content-middle">
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH-wkjIdM8fR73nVqwMsxLX8WyOnjr8l82bg&usqp=CAU" class="d-block w-100" alt="...">
                                            </button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
                                                <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
                                            </button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                                <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-2">
                                </div>
                            </div>

                            <div class="col-8 bg-light p-4 mb-2 "> <!--konten kanan  (tombol dan deskripsi )-->
                                <div class="row justify-content-start align-items-start p-2">
                                    <div class="col-6"> <!--konten kiri  (deskripsi)-->
                                        <h3> judul</h3>
                                        <div class="row mb-2 justify-content-start align-items-start"> <!--Label-->
                                            <div class="col-6"> <!--konten kiri  (nama)-->
                                                Label Produk
                                            </div>
                                            <div class="col-3 text-center border border-primary rounded-pill"> <!--konten kiri  (penjelasa label)-->
                                                Umum
                                            </div>
                                        </div>
                                        <div class="row mb-2 justify-content-start align-items-start "> <!--Harga-->
                                            <div class="col-6"> <!--konten kiri  (nama)-->
                                                Harga
                                            </div>
                                            <div class="col-6"> <!--konten kiri  (penjelasa harga)-->
                                                Rp. 12345
                                            </div>
                                        </div>
                                        <div class="row mb-2 justify-content-start align-items-start "> <!--Jumlah-->
                                            <div class="col-6"> <!--konten kiri  (nama)-->
                                                Jumlah
                                            </div>
                                            <div class="col-6"> <!--konten kiri  (penjelasa jumlah)-->
                                                <div class="row justify-content-center align-items-center g-2">
                                                    <div class="col-4 bg-primary text-white rounded-5 text-center">+</div>
                                                    <div class="col-4 text-center">1</div>
                                                    <div class="col-4 bg-primary text-white rounded-5 text-center">-</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6"> <!--konten kiri  (tombol)-->
                                        <div class="row justify-content-start align-items-start p-2">
                                            <button type="button" class="btn btn-primary btn-lg">Beli</button>
                                        </div>
                                        <div class="row justify-content-start align-items-start p-2">
                                            <button type="button" class="btn btn-outline-primary btn-lg">Tambah Keranjang</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-start align-items-start p-3">
                                    deskripsi : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla leo risus, porta vel massa eget, vulputate ultricies sem. Maecenas aliquet risus nec lacus cursus volutpat. Sed at nisi sed lacus posuere rhoncus eget non dolor. Sed eleifend odio et risus consequat, a convallis nisi aliquet.
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card card mb-4 p-4"> <!--card deskripsi-->
                        <div class="card-header bg-transparent mb-0">
                            <h5 class="text-start"> Deskripsi</h5>
                        </div>
                        <div class="row m-2">


                        </div>
                    </div>

                    <div class="card card mb-4 p-4"> <!--card produk Lainnya-->
                        <div class="card-header bg-transparent mb-0">
                            <h5 class="text-start"> Produk Lainnya</h5>
                        </div>
                        <div class="row m-2">

                            <div class="row row-cols-1 row-cols-md-4 g-4">
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH-wkjIdM8fR73nVqwMsxLX8WyOnjr8l82bg&usqp=CAU" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-body-secondary">See Details</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH-wkjIdM8fR73nVqwMsxLX8WyOnjr8l82bg&usqp=CAU" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-body-secondary">See Details</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH-wkjIdM8fR73nVqwMsxLX8WyOnjr8l82bg&usqp=CAU" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-body-secondary">See Details</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH-wkjIdM8fR73nVqwMsxLX8WyOnjr8l82bg&usqp=CAU" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-body-secondary">See Details</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH-wkjIdM8fR73nVqwMsxLX8WyOnjr8l82bg&usqp=CAU" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-body-secondary">See Details</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wrapper">
                        <div class="kotak">
                            <div class="card" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="card card mb-4 p-4"> <!--card deskripsi-->
                        <div class="card-header bg-transparent mb-0">
                            <h5 class="text-start"> Rating dan Ulasan</h5>
                        </div>
                        <div class="row m-2 bg-light">
                            makanan

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>