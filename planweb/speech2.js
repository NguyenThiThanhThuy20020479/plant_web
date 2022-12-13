var a = document.querySelector('.nav__list');
var b = document.querySelector('.questions__group');
var c = document.querySelector('.contact__inputs');
var q1 = b.childNodes[1].childNodes[1];
var q2 = b.childNodes[3].childNodes[1];
var q3 = b.childNodes[5].childNodes[1];
var q4 = b.childNodes[7].childNodes[1];
var q5 = b.childNodes[9].childNodes[1];
var q6 = b.childNodes[11].childNodes[1];
var home = a.childNodes[1].childNodes[1];
var about = a.childNodes[3].childNodes[1];
var product = a.childNodes[5].childNodes[1];
var question = a.childNodes[7].childNodes[1];
var contact = a.childNodes[9].childNodes[1];
var theme = document.getElementById('theme-button');
var p1 = document.getElementById("product1");
var p2 = document.getElementById("product2");
var p3 = document.getElementById("product3");
var p4 = document.getElementById("product4");
var p5 = document.getElementById("product5");
var p6 = document.getElementById("product6");

let utter = new SpeechSynthesisUtterance();
utter.lang = 'en-US';
utter.text = '';
utter.rate= 0.5;
utter.volume = 0.1;

var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
const recognition = new SpeechRecognition();
recognition.lang = 'vi-VN';
recognition.continious = false;
result = true;
const microphone = document.querySelector('.microphone');
const handlevoice = (text) =>{
    console.log('text', text);
    const handleText = text.toLowerCase();
    if(handleText.includes("thay màu nền")){
        var theme = document.getElementById('theme-button');
        theme.click();
    }
    if(handleText.includes("đổi màu")){
        var theme = document.getElementById('theme-button');
        theme.click();
        utter.text = "Change theme successfully";
        window.speechSynthesis.speak(utter);    
    }
    if(handleText.includes("đổi màu nền")){
        var theme = document.getElementById('theme-button');
        theme.click();
        utter.text = "Change theme successfully";
        window.speechSynthesis.speak(utter);    
    }
    if(handleText.includes("chuyển màu nền")){
        var theme = document.getElementById('theme-button');
        theme.click();
        utter.text = "Change theme successfully";
        window.speechSynthesis.speak(utter);    
    }
    if(handleText.includes("trang chủ")){
        home.click();
    }
    if(handleText.includes("giới thiệu")){
        about.click();
        utter.text = "Who we really are why choose us. We have over 4000+ unbiased reviews and our customers trust our plant process and delivery service every time. We always deliver on time. We give you guides to protect and care for your plants. We always come over for a check-up after sale. 100% money back guaranteed.";
        window.speechSynthesis.speak(utter);    
    }
    if(handleText.includes("câu hỏi")){
        question.click();
    }
    if(handleText.includes("thông tin liên hệ")){
        contact.click();
        utter.text = "Reach out to us today via any of the given information. Call us for instant support +999 888 777. Write us by mail plant@email.com";
        window.speechSynthesis.speak(utter);
    }
    if(handleText.includes("số điện thoại")){
        contact.click();
        utter.text = "Call us for instant support +999 888 777";
        window.speechSynthesis.speak(utter);
    }
    if(handleText.includes("địa chỉ email")){
        contact.click();
        utter.text = "Write us by mail plant@email.com";
        window.speechSynthesis.speak(utter);
    }
    if(handleText.includes("vì sao hoa thường gãy cánh hoặc chết")){
        q1.click();
        utter.text = "Plants are easy way to add color energy and transform your space but which planet is for you. Choosing the right plant.";
        window.speechSynthesis.speak(utter);   
    }
    if(handleText.includes("cách chọn cây phù hợp")){
        q4.click();
        utter.text = "Plants are easy way to add color energy and transform your space but which planet is for you. Choosing the right plant.";
        window.speechSynthesis.speak(utter);   
    }
    if(handleText.includes("tắt mic")){
        result = false;
        utter.text = "Turn off microphone successfully";
        window.speechSynthesis.speak(utter);
      
    } 
    if(handleText.includes("dừng mic")){
        result = false;
        utter.text = "Turn off microphone successfully";
        window.speechSynthesis.speak(utter);
       
    } 
    
    if(handleText.includes("sản phẩm")){
        product.click();
    } 
    if(handleText.includes("xương rồng núi")){
        p2.click();
    }
    if(handleText.includes("xương rồng thanh sơn")){
        p1.click();
    }
    if(handleText.includes("lô hội")){
        p3.click();
    }
    if(handleText.includes("sen đá")){
        p4.click();
    }
    if(handleText.includes("cây móng rồng")){
        p5.click();
    }
}
microphone.addEventListener('click', (e)=>{
    result = true;
    e.preventDefault();
    recognition.start();
});
recognition.onend = ()=>{
    if(result == false){
        recognition.stop();

    } else{
        result = true;
        recognition.start();
    }
}
recognition.onerror = (err)=>{
    console.error(err);
}
recognition.onresult = (e)=>{
    console.log('onresult', e);
    const text = e.results[0][0].transcript;
    handlevoice(text);
}