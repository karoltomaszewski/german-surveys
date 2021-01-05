
var $_GET = {};
if (document.location.toString().indexOf('?') !== -1) {
    var query = document.location
        .toString()
        // get the query string
        .replace(/^.*?\?/, '')
        // and remove any existing hash string (thanks, @vrijdenker)
        .replace(/#.*$/, '')
        .split('&');

    for (var i = 0, l = query.length; i < l; i++) {
        var aux = decodeURIComponent(query[i]).split('=');
        $_GET[aux[0]] = aux[1];
    }
}

if (document.querySelector("a[meta-region='" + $_GET["region"] + "']")) {
    document.querySelector("a[meta-region='" + $_GET["region"] + "']").style.opacity = "0.8";
}


document.querySelectorAll("path").forEach(e => {
    e.style.strokeWidth = "1px";
    e.setAttribute("stroke", "grey");
})

if ($_GET["date"]) {
    document.querySelectorAll("a[meta-region]").forEach(e => {
        e.setAttribute("href", e.getAttribute("href") + "&date=" + $_GET["date"]);
    })
}