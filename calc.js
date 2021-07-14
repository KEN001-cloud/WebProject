let am= 0;
window.onload = function() {
    calculate();
    //setInterval(calculate,100);
}

function calculate () {
    let selected = document.getElementById("datalist1").value;
    let pages = document.getElementById("inputZip").value;
    
    switch (selected) {
        case "22$ per page(250 words)-24 hours":
            am = parseInt(pages) * 22;
            break;
       case "20$ per page(250 words)-48 hours":
            am = parseInt(pages) * 20;
           break;
       case "18$ per page(250 words)-3 days":
           am = parseInt(pages) * 18;
           break;
    }

    //where the value would be displayed. id set to displayValue
    document.getElementById("val").innerHTML = am;
}
