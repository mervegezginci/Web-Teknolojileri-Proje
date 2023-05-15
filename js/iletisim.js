function control(){
    var ad = document.getElementById("ad").value;
    var soyad = document.getElementById("soyad").value;
    var email = document.getElementById("email");
    var email2 = document.getElementById("email").value;
    var konu=document.getElementById("konu").value;
    var mesaj=document.getElementById("mesaj").value;

    if (ad  == "")
    {
      alert("Ad Alanı Boş Bırakılamaz!");
      return false;
    }
    if (soyad == "")
    {
      alert("Soyad Alanı Boş Bırakılamaz!");
      return false;
    }
    if(email2==""){
      alert("Email Alanı Boş Bırakılamaz!")
      return false;
    }
    if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)))
    {
      alert("Geçerli bir E-Mail adresi girmelisiniz!");
      return false;
    }
    if(konu==""){
      alert("Konu Alanı Boş Bırakılamaz!")
      return false;
    }
    if(mesaj==""){
      alert("Lütfen mesajınızı giriniz!");
      return false;
    }
  }