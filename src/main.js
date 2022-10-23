

function submit(){

    var fullname = document.getElementById('fullname').value
    var username = document.getElementById('username').value

    var password = document.getElementById('password').value
    var RePass = document.getElementById('repass').value

    var ifsi = document.getElementById('ifSign')
    var iflo = document.getElementById('ifLog')

    if (fullname != "" && username != "" && password != "" && RePass != "" && password == RePass) {

        ifsi.className = "ifyou none"
        iflo.className = "ifyou"

        var data1 = $('.form-input').serialize();
        console.log(data1)

        $.ajax({
            type: "POST",
            url: "./function/register.php",
            data: data1,
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: response,
                    showConfirmButton: false,
                    timer: 2000
                })
            }
        });

        anime({
            targets: '#login',
            delay: 3000,
            top: 275,
            easing: 'easeOutExpo',
            duration: 3000
        })
        anime({
            targets: '#sign',
            delay: 3000,
            top: -700,
            easing: 'easeOutExpo',
            duration: 3000
        })
        anime({
            targets: '.card',
            delay: 3000,
            height: 350,
            top: 150,
            duration: 3000
        })
    }else{
        Swal.fire({
            title: 'Its Ok!',
            text: "Error Cuy",
            icon: 'succes',
            confirmButtonText: 'Cool'
        })
    }
}

function move() {
    var ifsi = document.getElementById('ifSign')
    var iflo = document.getElementById('ifLog')

    ifsi.className = "ifyou none"
    iflo.className = "ifyou"

    anime({
        targets: '#login',
        top: 275,
        easing: 'easeOutExpo',
        duration: 3000
    })
    anime({
        targets: '#sign',
        top: -700,
        easing: 'easeOutExpo',
        duration: 3000
    })
    anime({
        targets: '.card',
        height: 350,
        top: 150,
        duration: 3000
    })
}

function move2() {
    var ifsi = document.getElementById('ifSign')
    var iflo = document.getElementById('ifLog')

    ifsi.className = "ifyou"
    iflo.className = "ifyou none"

    anime({
        targets: '#login',
        top: 30,
        easing: 'easeOutExpo',
        duration: 3000
    })
    anime({
        targets: '#sign',
        top: 0,
        easing: 'easeOutExpo',
        duration: 3000
    })
    anime({
        targets: '.card',
        height: 500,
        top: 80,
        duration: 3000
    })
}

function login() {
    var user = document.getElementById('username2').value
    var password = document.getElementById('password2').value

    var data2 = $('.loggin').serialize();
    console.log(data2)

    if(user != "" && password != ""){
        $.ajax({
            type: "POST",
            url: "./function/login.php",
            data: data2,
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: response,
                    showConfirmButton: false,
                    timer: 2000
                })
                
                setTimeout(function () { 
                    location.replace("./game.html");
                }, 6000)
            }
        });
    }else{
        Swal.fire({
            icon: 'warning',
            title: 'Its Empty You STUPID FUCK!',
            showConfirmButton: false,
            timer: 2000
        })
    }
}