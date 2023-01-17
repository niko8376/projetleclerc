function sendMail(){
    var params ={
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        name: document.getElementById("message").value,
};

const serviceId="service_jkhdspj";
const templateID="template_ckqeqkp";

emailjs.send(serviceId, templateID, params)
.then((res)  => {
    document.getElementById("name").value ="";
    document.getElementById("email").value ="";
    document.getElementById("message").value ="";
    console.log(res);
    alert("votre message a bien été envoyé");
})
.catch((err)=> console.log(err));
}
