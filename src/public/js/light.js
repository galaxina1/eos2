function light() {
    document.cookie = "theme = style2.css";
    document.cookie = "light = light";
    document.getElementById('style1').setAttribute('href', 'src/public/style/style2.css');
    document.getElementById('light').setAttribute('onclick', 'light2()');
    document.getElementById('light').setAttribute('src', 'src/public/picture/site/light.png');

}

function light2() {
    document.cookie = "theme = style.css";
    document.cookie = "light = lightOff";
    document.getElementById('style1').setAttribute('href', 'src/public/style/style.css');
    document.getElementById('light').setAttribute('onclick', 'light()');
    document.getElementById('light').setAttribute('src', 'src/public/picture/site/lightOff.png');

}
