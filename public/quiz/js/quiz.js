const open =document.getElementById('btn-open');
const modal =document.getElementById('modal');
const close =document.getElementById('modal-close');

open.addEventListener('click', ()=>{
    modal.classList.add('show');
});

close.addEventListener('click', ()=>{
    modal.classList.remove('show');
});

function check1_1(params) {
    var c=0;
    var q1=document.quiz.question1.value;
    var result=document.getElementById('result');
    var confetti=document.getElementById('confetti');

    if (q1=="B") {c++}
    if(c==1){
        result.textContent='Hebat, Jawabanmu Benar!';
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/benar.mp3">
        </audio>
        `);
        setTimeout(() =>(confetti.style.display="block"),500);
        setTimeout(() =>(confetti.style.display="none"),5000);
    }
    else{
        result.textContent='Jawabanmu Salah, Ayo Coba Lagi!'
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/salah.mp3">
        </audio>
        `);
    }
}
function check1_2(params) {
    var c=0;
    var q2=document.quiz.question2.value;
    var result=document.getElementById('result');

    if (q2=="C") {c++}
    if(c==1){
        result.textContent='Hebat, Jawabanmu Benar!';
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/benar.mp3">
        </audio>
        `);
        setTimeout(() =>(confetti.style.display="block"),500);
        setTimeout(() =>(confetti.style.display="none"),5000);
    }
    else{
        result.textContent='Jawabanmu Salah, Ayo Coba Lagi!'
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/salah.mp3">
        </audio>
        `);
    }
}
function check1_3(params) {
    var c=0;
    var q3=document.quiz.question3.value;
    var result=document.getElementById('result');

    if (q3=="A") {c++}
    if(c==1){
        result.textContent='Hebat, Jawabanmu Benar!';
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/benar.mp3">
        </audio>
        `);
        setTimeout(() =>(confetti.style.display="block"),500);
        setTimeout(() =>(confetti.style.display="none"),5000);
    }
    else{
        result.textContent='Jawabanmu Salah, Ayo Coba Lagi!'
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/salah.mp3">
        </audio>
        `);
    }
}
function check1_4(params) {
    var c=0;
    var q4=document.quiz.question4.value;
    var result=document.getElementById('result');

    if (q4=="B") {c++}
    if(c==1){
        result.textContent='Hebat, Jawabanmu Benar!';
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/benar.mp3">
        </audio>
        `);
        setTimeout(() =>(confetti.style.display="block"),500);
        setTimeout(() =>(confetti.style.display="none"),5000);
    }
    else{
        result.textContent='Jawabanmu Salah, Ayo Coba Lagi!'
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/salah.mp3">
        </audio>
        `);
    }
}
function check1_5(params) {
    var c=0;
    var q5=document.quiz.question5.value;
    var result=document.getElementById('result');

    if (q5=="B") {c++}
    if(c==1){
        result.textContent='Hebat, Jawabanmu Benar!';
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/benar.mp3">
        </audio>
        `);
        setTimeout(() =>(confetti.style.display="block"),500);
        setTimeout(() =>(confetti.style.display="none"),5000);
    }
    else{
        result.textContent='Jawabanmu Salah, Ayo Coba Lagi!'
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/salah.mp3">
        </audio>
        `);
    }
}

// ---------------------------------------------------------------------------------
function check2_1(params) {
    var c=0;
    var q1=document.quiz.question1.value;
    var result=document.getElementById('result');

    if (q1=="B") {c++}
    if(c==1){
        result.textContent='Hebat, Jawabanmu Benar!';
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/benar.mp3">
        </audio>
        `);
        setTimeout(() =>(confetti.style.display="block"),500);
        setTimeout(() =>(confetti.style.display="none"),5000);
    }
    else{
        result.textContent='Jawabanmu Salah, Ayo Coba Lagi!'
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/salah.mp3">
        </audio>
        `);
    }
}
function check2_2(params) {
    var c=0;
    var q2=document.quiz.question2.value;
    var result=document.getElementById('result');

    if (q2=="C") {c++}
    if(c==1){
        result.textContent='Hebat, Jawabanmu Benar!';
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/benar.mp3">
        </audio>
        `);
        setTimeout(() =>(confetti.style.display="block"),500);
        setTimeout(() =>(confetti.style.display="none"),5000);
    }
    else{
        result.textContent='Jawabanmu Salah, Ayo Coba Lagi!'
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/salah.mp3">
        </audio>
        `);
    }
}
function check2_3(params) {
    var c=0;
    var q3=document.quiz.question3.value;
    var result=document.getElementById('result');

    if (q3=="C") {c++}
    if(c==1){
        result.textContent='Hebat, Jawabanmu Benar!';
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/benar.mp3">
        </audio>
        `);
        setTimeout(() =>(confetti.style.display="block"),500);
        setTimeout(() =>(confetti.style.display="none"),5000);
    }
    else{
        result.textContent='Jawabanmu Salah, Ayo Coba Lagi!'
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/salah.mp3">
        </audio>
        `);
    }
}
function check2_4(params) {
    var c=0;
    var q4=document.quiz.question4.value;
    var result=document.getElementById('result');

    if (q4=="A") {c++}
    if(c==1){
        result.textContent='Hebat, Jawabanmu Benar!';
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/benar.mp3">
        </audio>
        `);
        setTimeout(() =>(confetti.style.display="block"),500);
        setTimeout(() =>(confetti.style.display="none"),5000);
    }
    else{
        result.textContent='Jawabanmu Salah, Ayo Coba Lagi!'
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/salah.mp3">
        </audio>
        `);
    }
}
function check2_5(params) {
    var c=0;
    var q5=document.quiz.question5.value;
    var result=document.getElementById('result');

    if (q5=="B") {c++}
    if(c==1){
        result.textContent='Hebat, Jawabanmu Benar!';
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/benar.mp3">
        </audio>
        `);
        setTimeout(() =>(confetti.style.display="block"),500);
        setTimeout(() =>(confetti.style.display="none"),5000);
    }
    else{
        result.textContent='Jawabanmu Salah, Ayo Coba Lagi!'
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/salah.mp3">
        </audio>
        `);
    }
}

// ---------------------------------------------------------------------------------
function check3_1(params) {
    var c=0;
    var q1=document.quiz.question1.value;
    var result=document.getElementById('result');

    if (q1=="A") {c++}
    if(c==1){
        result.textContent='Hebat, Jawabanmu Benar!';
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/benar.mp3">
        </audio>
        `);
        setTimeout(() =>(confetti.style.display="block"),500);
        setTimeout(() =>(confetti.style.display="none"),5000);
    }
    else{
        result.textContent='Jawabanmu Salah, Ayo Coba Lagi!'
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/salah.mp3">
        </audio>
        `);
    }
}
function check3_2(params) {
    var c=0;
    var q2=document.quiz.question2.value;
    var result=document.getElementById('result');

    if (q2=="B") {c++}
    if(c==1){
        result.textContent='Hebat, Jawabanmu Benar!';
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/benar.mp3">
        </audio>
        `);
        setTimeout(() =>(confetti.style.display="block"),500);
        setTimeout(() =>(confetti.style.display="none"),5000);
    }
    else{
        result.textContent='Jawabanmu Salah, Ayo Coba Lagi!'
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/salah.mp3">
        </audio>
        `);
    }
}
function check3_3(params) {
    var c=0;
    var q3=document.quiz.question3.value;
    var result=document.getElementById('result');

    if (q3=="C") {c++}
    if(c==1){
        result.textContent='Hebat, Jawabanmu Benar!';
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/benar.mp3">
        </audio>
        `);
        setTimeout(() =>(confetti.style.display="block"),500);
        setTimeout(() =>(confetti.style.display="none"),5000);
    }
    else{
        result.textContent='Jawabanmu Salah, Ayo Coba Lagi!'
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/salah.mp3">
        </audio>
        `);
    }
}
function check3_4(params) {
    var c=0;
    var q4=document.quiz.question4.value;
    var result=document.getElementById('result');

    if (q4=="A") {c++}
    if(c==1){
        result.textContent='Hebat, Jawabanmu Benar!';
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/benar.mp3">
        </audio>
        `);
        setTimeout(() =>(confetti.style.display="block"),500);
        setTimeout(() =>(confetti.style.display="none"),5000);
    }
    else{
        result.textContent='Jawabanmu Salah, Ayo Coba Lagi!'
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/salah.mp3">
        </audio>
        `);
    }
}
function check3_5(params) {
    var c=0;
    var q5=document.quiz.question5.value;
    var result=document.getElementById('result');

    if (q5=="A") {c++}
    if(c==1){
        result.textContent='Hebat, Jawabanmu Benar!';
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/benar.mp3">
        </audio>
        `);
        setTimeout(() =>(confetti.style.display="block"),500);
        setTimeout(() =>(confetti.style.display="none"),5000);
    }
    else{
        result.textContent='Jawabanmu Salah, Ayo Coba Lagi!'
        result.insertAdjacentHTML("beforeend",`
        <audio autoplay>
        <source src="/themes/audio/salah.mp3">
        </audio>
        `);
    }
}