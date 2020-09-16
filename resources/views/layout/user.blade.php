<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/user.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="sidebar bg-dark border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Subjek Pelajaran</div>
            <div class="list-group list-group-flush">
                <div class="accordion" id="accordionExample">
                    @foreach ($pelajaran as $subjek)
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{$loop->iteration}}" aria-expanded="true" aria-controls="collapse{{$loop->iteration}}">
                                    {{$subjek->keterangan}}
                                </button>
                            </h2>
                        </div>

                        <div id="collapse{{$loop->iteration}}" class="collapse
                            <?php if ($loop->iteration == '1') {
                                echo 'show';
                            } ?>
                            " aria-labelledby="heading{{$loop->iteration}}" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul class="pagination flex-list">
                                    @foreach ($soal[$subjek->id_pelajaran] as $data)
                                    <li><a class="page-link" href="#" id="page-soal" onchange="showSoal(this.<?= $data->id; ?>)">{{$data->nomor}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <button class="btn btn-sidebar" id="menu-toggle">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-grid-3x2-gap-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V4zM1 9a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V9zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V9z" />
                    </svg>
                </button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Petunjuk Sistem</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Aturan Pengerjaan</a>
                        </li>
                        <li class="nav-item-danger active">
                            <a class="nav-link" href="#">Akhiri Ujian</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <div class="user-info">
                    <table width="100%">
                        <tr>
                            <td width="35%">{{session('email')}}</td>
                            <td width="20%">{{session('id_tipe_ujian')}}</td>
                            <td width="35%">
                                <span id="time">--:--:--</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="content-ujian">
                    <div id="nomor-soal"></div>
                    <table border='1' id='userTable' style='border-collapse: collapse;'>
                        <thead>
                            <tr>
                                <th>S.no</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

    <script>
        function startTimer(duration, display) {
            var timer = duration,
                hours, minutes, seconds;
            setInterval(function() {
                hours = parseInt(timer / 60 / 60, 10);
                minutes = parseInt(timer / 60 % 60, 10);
                seconds = parseInt(timer % 60, 10);

                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = hours + ":" + minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }


        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        var cnt = 2 * 60 * 60;

        function counter() {
            minutes = cnt / 60;
            if (getCookie("cnt") > 0) {
                cnt = getCookie("cnt");
            }
            cnt -= 1;

            document.cookie = "cnt=" + cnt;
            jQuery().val(getCookie("cnt"));
            display = document.querySelector('#time');
            startTimer(cnt, display);

            if (cnt > 0) {
                setTimeout(counter, 1000);
            }

        }
        // counter();
    </script>

    <script>
        $('#page-soal').on('click', function() {
            const id = $(this).data('id');
            $.ajax({
                url: "/session/user/ujian/" + id,
                type: 'get',
                dataType: 'json',
            }).done(function(response) {
                var nomor = response.show.nomor;

                var tr_str = "<tr>" +
                   "<td align='center'>" + nomor + "</td>"
                 "</tr>";
                 $("#userTable tbody").append(tr_str);
            });
        });
    </script>


</body>

</html>