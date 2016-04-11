conte = document.getElementById("cont_99ffc86848d7a75374e24d00d9c4c1e9");
    enlace = document.getElementById("h_99ffc86848d7a75374e24d00d9c4c1e9");
    anchor = document.getElementById("a_99ffc86848d7a75374e24d00d9c4c1e9");
    h2_enlace = document.getElementById("h2_99ffc86848d7a75374e24d00d9c4c1e9");
        if (conte && enlace) {
        enlace.style.cssText = "font-family: Roboto; font-size: 13px; color: #c0c0c0; text-align: center; text-decoration: none; cursor: pointer;display: block; width: 100%; padding: 4px 0px 1px 0px;";conte.style.cssText = "width: 599px; color: #000000; background-color:#ecf0f1; border:1px solid #ecf0f1; margin: 0 auto; font-family: Roboto;";
        if (h2_enlace) h2_enlace.style.cssText = "font-weight:normal;display:inline;";
        elem = document.createElement("iframe");
        elem.style.cssText = "width:599px; color:#000000; height:62px;";elem.id = "99ffc86848d7a75374e24d00d9c4c1e9";
        elem.src = "https://www.tempo.pt/getwid/99ffc86848d7a75374e24d00d9c4c1e9";
        elem.frameBorder = 0;
        elem.allowTransparency = true;
        elem.scrolling = "no";
        elem.name = "flipe";
        conte.appendChild(elem);
}