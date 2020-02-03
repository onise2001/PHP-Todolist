$(document).ready(function () {

    //Load Todos



    let xhr = new XMLHttpRequest();
    let todos;

    xhr.open("GET", "UI.php?req=yes", true);
    xhr.send();
    xhr.onload = function () {
        if (this.readyState == 4 && this.status == 200) {
            todos = JSON.parse(this.responseText);
            todos.forEach(function (todo) {

                let tcell = document.createElement('tr');
                tcell.innerHTML = `
                 <td>${todo['title']}</td>
                 <td>${todo['date']}></td>
                 <td><a href="#" id="delete-todo">X</a></td>`;
                $('#tbody').append(tcell);



            });
            console.log(this.responseText);
        }

    }


    //Load Todos End





    // events
    $("#add-todo").click(function () {

        let title = document.querySelector("#title").value;
        let date = document.querySelector("#date").value;



        xhr.open("GET", "UI.php?req=add&title=" + title + "&date=" + date, true);
        xhr.send();
        xhr.onload = function () {

            if (this.readyState == 4 && this.status == 200) {
                let tcell = document.createElement('tr');
                tcell.innerHTML = `<td>${title}</td>
                     <td>${date}></td>
                     <td><a href="#" id="delete-todo">X</a></td>`;
                $('#tbody').append(tcell);
            };


        };
    });



    $("$delete-todo").click(function (e) {
        xhr.open("GET", "UI.php?req=del" + title + "&date=" + date, true);
        xhr.send();
        xhr.onload = function () {



        };
    }







