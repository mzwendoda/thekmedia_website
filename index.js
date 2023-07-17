function sendMail(){

    var params ={

        name: document.getElementById("name").value ,
        email: document.getElementById("email").value ,
        phone: document.getElementById("phone").value ,
        enqueries: document.getElementById("enqueries").value ,
        message: document.getElementById("message").value ,

    }
    const serviceID = "service_7e75w49";
    const templateID = "template_kiua25t";

    emailjs.send(serviceID,templateID,params)
    .then(

        res=>{

            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("phone").value = "";
            document.getElementById("enqueries").value = "";
            document.getElementById("message").value = "";

            console.log(res);

            alert("your message sent successfully");
        }
    )
    .catch((error) => console.log(error));
}

