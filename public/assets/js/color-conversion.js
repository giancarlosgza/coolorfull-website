var C1 = '{{$gradient->color_1}}';
var C2 = '{{$gradient->color_2}}';

hexToHSL(C1, C2)

function hexToHSL(C1, C2) {
//COLOR 1
let r = 0, g = 0, b = 0;
if (C1.length == 4) {   
    r = "0x" + C1[1] + C1[1];
    g = "0x" + C1[2] + C1[2];
    b = "0x" + C1[3] + C1[3];
} else if (C1.length == 7) {
    r = "0x" + C1[1] + C1[2];
    g = "0x" + C1[3] + C1[4];
    b = "0x" + C1[5] + C1[6];
}

r /= 255;
g /= 255;
b /= 255;
let cmin = Math.min(r,g,b),
    cmax = Math.max(r,g,b),
    delta = cmax - cmin,
    h = 0,
    s = 0,
    l = 0;

if (delta == 0)
    h = 0;
else if (cmax == r)
    h = ((g - b) / delta) % 6;
else if (cmax == g)
    h = (b - r) / delta + 2;
else
    h = (r - g) / delta + 4;

h = Math.round(h * 60);

if (h < 0)
    h += 360;

l = (cmax + cmin) / 2;
s = delta == 0 ? 0 : delta / (1 - Math.abs(2 * l - 1));
s = +(s * 100).toFixed(1);
l = +(l * 100).toFixed(1);

//COLOR 2
let r2 = 0, g2 = 0, b2 = 0;
if (C2.length == 4) {   
    r2 = "0x" + C2[1] + C2[1];
    g2 = "0x" + C2[2] + C2[2];
    b2 = "0x" + C2[3] + C2[3];
} else if (C2.length == 7) {
    r2 = "0x" + C2[1] + C2[2];
    g2 = "0x" + C2[3] + C2[4];
    b2 = "0x" + C2[5] + C2[6];
}

r2 /= 255;
g2 /= 255;
b2 /= 255;
let cmin2 = Math.min(r2,g2,b2),
    cmax2 = Math.max(r2,g2,b2),
    delta2 = cmax2 - cmin2,
    h2 = 0,
    s2 = 0,
    l2 = 0;

if (delta2 == 0)
    h2 = 0;
else if (cmax2 == r2)
    h2 = ((g2 - b2) / delta2) % 6;
else if (cmax2 == g2)
    h2 = (b2 - r2) / delta2 + 2;
else
    h2 = (r2 - g2) / delta2 + 4;

h2 = Math.round(h2 * 60);

if (h2 < 0)
    h2 += 360;

l2 = (cmax2 + cmin2) / 2;
s2 = delta2 == 0 ? 0 : delta2 / (1 - Math.abs(2 * l - 1));
s2 = +(s2 * 100).toFixed(1);
l2 = +(l2 * 100).toFixed(1);

document.getElementById("hsl").innerHTML = "hsl(" + h + "," + s + "%," + l + "%)";
document.getElementById("hsl2").innerHTML = "hsl(" + h2 + "," + s2 + "%," + l2 + "%)";
}



function hexToCMYK (C1, C2) {
    var C = 0;
    var M = 0;
    var Y = 0;
    var K = 0;
   
    C1 = (C1.charAt(0)=="#") ? C1.substring(1,7) : C1;
   
    var r = parseInt(C1.substring(0,2),16); 
    var g = parseInt(C1.substring(2,4),16); 
    var b = parseInt(C1.substring(4,6),16); 
   
    // BLACK
    if (r==0 && g==0 && b==0) {
     K = 1;
     return [0,0,0,1];
    }
   
    C = 1 - (r/255);
    M = 1 - (g/255);
    Y = 1 - (b/255);
   
    var minCMY = Math.min(C,Math.min(M,Y));
   
    C = (C - minCMY) / (1 - minCMY) ;
    M = (M - minCMY) / (1 - minCMY) ;
    Y = (Y - minCMY) / (1 - minCMY) ;
    K = minCMY;
   
    return [C,M,Y,K];
   }