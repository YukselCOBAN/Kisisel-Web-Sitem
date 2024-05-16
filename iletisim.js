
function Validation(){

    var Email=document.getElementById('email').value;
    var Isım=document.getElementById('isim').value;
    var Tel=document.getElementById('tel').value;
    
    var control="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/";

    var text=document.getElementById('Text');
   

    if(Email.match(control))// alt dizinin içeriği doluysa true boşsa false döner.
    {
   text.innerHTML="e-mail adresiniz geçersiz ";
   text.style.color='darkred';
    }
    else{
        text.innerHTML='e-mail adresiniz geçerli';
        text.style.color='darkgreen';
    }

    if(document.getElementById("isim").value=="")
        {
            alert("İsim kısmı boş");
        }
       else if(document.getElementById("tel").value=="")
        {
            alert("Telefon kısmı boş");
        }
       else if(document.getElementById("email").value=="")
        {
            alert("Email kısmı boş");
        }
        else 
        {
                alert("Mesaj kısmı boş");
        }
       
}