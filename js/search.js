const showHide = () => {
    let search = document.getElementById('search-input');
    let table = document.querySelector("filterTable");

    if (search.style.display === "none") {
        search.style.display = "flex";
        table.style.overflow = "hidden";
    }
    else {
        search.style.display = "none";
        table.style.overflow = "auto";
    }
};

$(document).ready(function () {
    $("#search").keyup(function () {
        var query = $(this).val();

        if (query != "") {
            $.ajax({
                url: "../search.php",
                method: "POST",
                data: {
                    query: query,
                },
                success: function (data) {
                    $("#result").html(data);
                },
            });
        }
        else {
            $("#result").html("display", "none");
        }
    });
});