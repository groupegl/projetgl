function sendDSL() {
var scriptElement = document.createElement('script');
scriptElement.src = 'php/connection_recuperation.php';
document.body.appendChild(scriptElement);
return this.id ;
}
