var strImage



if (navigator.appName == "Netscape"){
//alert('using netscape');

if(screen.width<=800){
//alert ("<800 " + screen.width)
strImage1152 = 800
strImage = 800
document.write("<link rel='stylesheet' href='http://www.hmg.ie/test724/includes/style_800.css' type='text/css'>");}

else if(screen.width>820 && screen.width<=1024){
//alert ("<1024 " + screen.width)
strImage1152 = 1024
strImage = 1024
document.write("<link rel='stylesheet' href='http://www.hmg.ie/test724/includes/style_1024.css' type='text/css'>");}

else if(screen.width>1024 && screen.width<=1152){
//alert ("<1152 " + screen.width)
strImage1152 = 1152
strImage = 1024
document.write("<link rel='stylesheet' href='http://www.hmg.ie/test724/includes/style_1024.css' type='text/css'>");}

else {
//alert ("Use default 1024 ")
strImage1152 = 1024
strImage = 1024
document.write("<link rel='stylesheet' href='http://www.hmg.ie/test724/includes/style_1024.css' type='text/css'>");
}

}

else {
//alert('using IE');

if(screen.width<=800){
//alert ("<800 " + screen.width)
strImage1152 = 800
strImage = 800
document.write("<link rel='stylesheet' href='http://www.hmg.ie/test724/includes/style_800.css' type='text/css'>");}

else if(screen.width>820 && screen.width<=1024){
//alert ("<1024 " + screen.width)
strImage1152 = 1024
strImage = 1024
document.write("<link rel='stylesheet' href='http://www.hmg.ie/test724/includes/style_1024.css' type='text/css'>");}

else if(screen.width>1024 && screen.width<=1152){
//alert ("<1152 " + screen.width)
strImage1152 = 1152
strImage = 1024
document.write("<link rel='stylesheet' href='http://www.hmg.ie/test724/includes/style_1024.css' type='text/css'>");}

else {
//alert ("Use default 1024 ")
strImage1152 = 1024
strImage = 1024
document.write("<link rel='stylesheet' href='http://www.hmg.ie/test724/includes/style_1024.css' type='text/css'>");
}

}
