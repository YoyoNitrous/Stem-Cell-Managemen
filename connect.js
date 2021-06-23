document.getElementById('delete').addEventListener('click',function(){
    document.querySelector('.bg-modal').style.display = 'flex';
});

document.querySelector('.close').addEventListener('click',function(){
    document.querySelector('.bg-modal').style.display='none';
});

document.getElementById('del2').addEventListener('click',function(){
    document.querySelector('.bg-modal1').style.display='flex';
});

document.querySelector('.closen').addEventListener('click',function(){
    document.querySelector('.bg-modal1').style.display='none';
});

document.getElementById('add').addEventListener('click',function(){
    document.querySelector('.bg-modal2').style.display = 'flex';
});

document.querySelector('.closem').addEventListener('click',function(){
    document.querySelector('.bg-modal2').style.display='none';
});

document.getElementById('add2').addEventListener('click',function(){
    document.querySelector('.bg-modal3').style.display = 'flex';
});

document.querySelector('.closeo').addEventListener('click',function(){
    document.querySelector('.bg-modal3').style.display='none';
});