<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ImmoBenin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @vite('resources/css/app.css')
  <!-- Favicons -->
  <link href="{{ asset('client/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('client/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('client/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('client/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('client/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('client/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('client/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('client/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('client/css/main.css')}}" rel="stylesheet">
  <style>
    .text-overlay{
      position: absolute;
      color: #000;
      font: 20px bold;
      background-color: white;
      opacity: 0.5;
      padding: 10px;
      text-align: right;
      width: 30%;
    }

.top-0{
  top: 0px;
}

.top-1{
  top: 0.25rem;
}

.top-1\/2{
  top: 50%;
}

.top-10{
  top: 2.5rem;
}

.top-3{
  top: 0.75rem;
}

.top-4{
  top: 1rem;
}

.top-5{
  top: 1.25rem;
}

.top-6{
  top: 1.5rem;
}

.top-7{
  top: 1.75rem;
}

.top-\[-3px\]{
  top: -3px;
}

.top-\[110\%\]{
  top: 110%;
}

.top-\[90px\]{
  top: 90px;
}

.top-full{
  top: 100%;
}

.-z-10{
  z-index: -10;
}

.z-10{
  z-index: 10;
}

.z-20{
  z-index: 20;
}

.z-30{
  z-index: 30;
}

.z-40{
  z-index: 40;
}

.z-50{
  z-index: 50;
}

.z-\[-1\]{
  z-index: -1;
}

.z-\[-2\]{
  z-index: -2;
}

.m-10{
  margin: 2.5rem;
}

.m-2{
  margin: 0.5rem;
}

.-mx-2{
  margin-left: -0.5rem;
  margin-right: -0.5rem;
}

.-mx-3{
  margin-left: -0.75rem;
  margin-right: -0.75rem;
}

.-mx-4{
  margin-left: -1rem;
  margin-right: -1rem;
}

.-mx-5{
  margin-left: -1.25rem;
  margin-right: -1.25rem;
}

.-mx-\[6px\]{
  margin-left: -6px;
  margin-right: -6px;
}

.mx-3{
  margin-left: 0.75rem;
  margin-right: 0.75rem;
}

.mx-4{
  margin-left: 1rem;
  margin-right: 1rem;
}

.mx-5{
  margin-left: 1.25rem;
  margin-right: 1.25rem;
}

.mx-7{
  margin-left: 1.75rem;
  margin-right: 1.75rem;
}

.mx-auto{
  margin-left: auto;
  margin-right: auto;
}

.my-1{
  margin-top: 0.25rem;
  margin-bottom: 0.25rem;
}

.my-4{
  margin-top: 1rem;
  margin-bottom: 1rem;
}

.my-5{
  margin-top: 1.25rem;
  margin-bottom: 1.25rem;
}

.my-\[6px\]{
  margin-top: 6px;
  margin-bottom: 6px;
}

.-mb-\[1px\]{
  margin-bottom: -1px;
}

.-ml-1{
  margin-left: -0.25rem;
}

.-ml-4{
  margin-left: -1rem;
}

.-ml-5{
  margin-left: -1.25rem;
}

.-mr-3{
  margin-right: -0.75rem;
}

.-mt-2{
  margin-top: -0.5rem;
}

.-mt-20{
  margin-top: -5rem;
}

.mb-0{
  margin-bottom: 0px;
}

.mb-0\.5{
  margin-bottom: 0.125rem;
}

.mb-1{
  margin-bottom: 0.25rem;
}

.mb-1\.5{
  margin-bottom: 0.375rem;
}

.mb-10{
  margin-bottom: 2.5rem;
}

.mb-11{
  margin-bottom: 2.75rem;
}

.mb-12{
  margin-bottom: 3rem;
}

.mb-14{
  margin-bottom: 3.5rem;
}

.mb-2{
  margin-bottom: 0.5rem;
}

.mb-2\.5{
  margin-bottom: 0.625rem;
}

.mb-3{
  margin-bottom: 0.75rem;
}

.mb-3\.5{
  margin-bottom: 0.875rem;
}

.mb-4{
  margin-bottom: 1rem;
}

.mb-5{
  margin-bottom: 1.25rem;
}

.mb-6{
  margin-bottom: 1.5rem;
}

.mb-7{
  margin-bottom: 1.75rem;
}

.mb-8{
  margin-bottom: 2rem;
}

.mb-9{
  margin-bottom: 2.25rem;
}

.mb-\[10px\]{
  margin-bottom: 10px;
}

.mb-\[14px\]{
  margin-bottom: 14px;
}

.mb-\[60px\]{
  margin-bottom: 60px;
}

.ml-1{
  margin-left: 0.25rem;
}

.ml-2{
  margin-left: 0.5rem;
}

.ml-3{
  margin-left: 0.75rem;
}

.ml-auto{
  margin-left: auto;
}

.mr-1{
  margin-right: 0.25rem;
}

.mr-2{
  margin-right: 0.5rem;
}

.mr-2\.5{
  margin-right: 0.625rem;
}

.mr-3{
  margin-right: 0.75rem;
}

.mr-4{
  margin-right: 1rem;
}

.mr-5{
  margin-right: 1.25rem;
}

.mr-6{
  margin-right: 1.5rem;
}

.mr-8{
  margin-right: 2rem;
}

.mr-\[18px\]{
  margin-right: 18px;
}

.mr-\[6px\]{
  margin-right: 6px;
}

.mt-0{
  margin-top: 0px;
}

.mt-0\.5{
  margin-top: 0.125rem;
}

.mt-1{
  margin-top: 0.25rem;
}

.mt-1\.5{
  margin-top: 0.375rem;
}

.mt-10{
  margin-top: 2.5rem;
}

.mt-2{
  margin-top: 0.5rem;
}

.mt-3{
  margin-top: 0.75rem;
}

.mt-5{
  margin-top: 1.25rem;
}

.mt-8{
  margin-top: 2rem;
}

.mt-\[-2px\]{
  margin-top: -2px;
}

.block{
  display: block;
}

.inline-block{
  display: inline-block;
}

.inline{
  display: inline;
}

.flex{
  display: flex;
}

.inline-flex{
  display: inline-flex;
}

.table{
  display: table;
}

.grid{
  display: grid;
}

.hidden{
  display: none;
}

.aspect-square{
  aspect-ratio: 1 / 1;
}

.h-1{
  height: 0.25rem;
}

.h-10{
  height: 2.5rem;
}

.h-11{
  height: 2.75rem;
}

.h-12{
  height: 3rem;
}

.h-2{
  height: 0.5rem;
}

.h-2\.5{
  height: 0.625rem;
}

.h-20{
  height: 5rem;
}

.h-3{
  height: 0.75rem;
}

.h-3\.5{
  height: 0.875rem;
}

.h-4{
  height: 1rem;
}

.h-5{
  height: 1.25rem;
}

.h-6{
  height: 1.5rem;
}

.h-7{
  height: 1.75rem;
}

.h-8{
  height: 2rem;
}

.h-9{
  height: 2.25rem;
}

.h-\[100px\]{
  height: 100px;
}

.h-\[106\%\]{
  height: 106%;
}

.h-\[108\%\]{
  height: 108%;
}

.h-\[10px\]{
  height: 10px;
}

.h-\[110\%\]{
  height: 110%;
}

.h-\[13px\]{
  height: 13px;
}

.h-\[14px\]{
  height: 14px;
}

.h-\[15px\]{
  height: 15px;
}

.h-\[18px\]{
  height: 18px;
}

.h-\[200px\]{
  height: 200px;
}

.h-\[26px\]{
  height: 26px;
}

.h-\[2px\]{
  height: 2px;
}

.h-\[300px\]{
  height: 300px;
}

.h-\[30px\]{
  height: 30px;
}

.h-\[320px\]{
  height: 320px;
}

.h-\[34px\]{
  height: 34px;
}

.h-\[36px\]{
  height: 36px;
}

.h-\[37px\]{
  height: 37px;
}

.h-\[38px\]{
  height: 38px;
}

.h-\[3px\]{
  height: 3px;
}

.h-\[42px\]{
  height: 42px;
}

.h-\[44px\]{
  height: 44px;
}

.h-\[45px\]{
  height: 45px;
}

.h-\[46px\]{
  height: 46px;
}

.h-\[50px\]{
  height: 50px;
}

.h-\[52px\]{
  height: 52px;
}

.h-\[54px\]{
  height: 54px;
}

.h-\[60px\]{
  height: 60px;
}

.h-\[70px\]{
  height: 70px;
}

.h-\[7px\]{
  height: 7px;
}

.h-auto{
  height: auto;
}

.h-full{
  height: 100%;
}

.h-px{
  height: 1px;
}

.h-screen{
  height: 100vh;
}

.h-24{
  height: 6rem;
}

.min-h-\[260px\]{
  min-height: 260px;
}

.min-h-\[328px\]{
  min-height: 328px;
}

.min-h-screen{
  min-height: 100vh;
}

.w-1\/2{
  width: 50%;
}

.w-1\/3{
  width: 33.333333%;
}

.w-1\/6{
  width: 16.666667%;
}

.w-10{
  width: 2.5rem;
}

.w-12{
  width: 3rem;
}

.w-14{
  width: 3.5rem;
}

.w-2{
  width: 0.5rem;
}

.w-2\.5{
  width: 0.625rem;
}

.w-20{
  width: 5rem;
}

.w-3{
  width: 0.75rem;
}

.w-3\.5{
  width: 0.875rem;
}

.w-3\/4{
  width: 75%;
}

.w-4{
  width: 1rem;
}

.w-4\/6{
  width: 66.666667%;
}

.w-5{
  width: 1.25rem;
}

.w-5\/6{
  width: 83.333333%;
}

.w-56{
  width: 14rem;
}

.w-6{
  width: 1.5rem;
}

.w-60{
  width: 15rem;
}

.w-7{
  width: 1.75rem;
}

.w-8{
  width: 2rem;
}

.w-9{
  width: 2.25rem;
}

.w-\[10\%\]{
  width: 10%;
}

.w-\[100px\]{
  width: 100px;
}

.w-\[106\%\]{
  width: 106%;
}

.w-\[108\%\]{
  width: 108%;
}

.w-\[10px\]{
  width: 10px;
}

.w-\[110\%\]{
  width: 110%;
}

.w-\[13px\]{
  width: 13px;
}

.w-\[14px\]{
  width: 14px;
}

.w-\[150px\]{
  width: 150px;
}

.w-\[15px\]{
  width: 15px;
}

.w-\[18px\]{
  width: 18px;
}

.w-\[20\%\]{
  width: 20%;
}

.w-\[200px\]{
  width: 200px;
}

.w-\[240px\]{
  width: 240px;
}

.w-\[30px\]{
  width: 30px;
}

.w-\[38px\]{
  width: 38px;
}

.w-\[40\%\]{
  width: 40%;
}

.w-\[40px\]{
  width: 40px;
}

.w-\[42px\]{
  width: 42px;
}

.w-\[45\%\]{
  width: 45%;
}

.w-\[50\%\]{
  width: 50%;
}

.w-\[50px\]{
  width: 50px;
}

.w-\[52px\]{
  width: 52px;
}

.w-\[60px\]{
  width: 60px;
}

.w-\[63\%\]{
  width: 63%;
}

.w-\[68px\]{
  width: 68px;
}

.w-\[70px\]{
  width: 70px;
}

.w-\[75\%\]{
  width: 75%;
}

.w-\[7px\]{
  width: 7px;
}

.w-\[82px\]{
  width: 82px;
}

.w-\[84\%\]{
  width: 84%;
}

.w-\[90\%\]{
  width: 90%;
}

.w-\[90px\]{
  width: 90px;
}

.w-full{
  width: 100%;
}

.w-px{
  width: 1px;
}

.w-24{
  width: 6rem;
}

.min-w-10{
  min-width: 2.5rem;
}

.min-w-\[160px\]{
  min-width: 160px;
}

.min-w-\[300px\]{
  min-width: 300px;
}

.min-w-\[64px\]{
  min-width: 64px;
}

.max-w-\[160px\]{
  max-width: 160px;
}

.max-w-\[210px\]{
  max-width: 210px;
}

.max-w-\[220px\]{
  max-width: 220px;
}

.max-w-\[250px\]{
  max-width: 250px;
}

.max-w-\[26px\]{
  max-width: 26px;
}

.max-w-\[290px\]{
  max-width: 290px;
}

.max-w-\[300px\]{
  max-width: 300px;
}

.max-w-\[30px\]{
  max-width: 30px;
}

.max-w-\[310px\]{
  max-width: 310px;
}

.max-w-\[325px\]{
  max-width: 325px;
}

.max-w-\[34px\]{
  max-width: 34px;
}

.max-w-\[350px\]{
  max-width: 350px;
}

.max-w-\[36px\]{
  max-width: 36px;
}

.max-w-\[370px\]{
  max-width: 370px;
}

.max-w-\[380px\]{
  max-width: 380px;
}

.max-w-\[400px\]{
  max-width: 400px;
}

.max-w-\[40px\]{
  max-width: 40px;
}

.max-w-\[415px\]{
  max-width: 415px;
}

.max-w-\[422px\]{
  max-width: 422px;
}

.max-w-\[44px\]{
  max-width: 44px;
}

.max-w-\[450px\]{
  max-width: 450px;
}

.max-w-\[45px\]{
  max-width: 45px;
}

.max-w-\[460px\]{
  max-width: 460px;
}

.max-w-\[470px\]{
  max-width: 470px;
}

.max-w-\[480px\]{
  max-width: 480px;
}

.max-w-\[490px\]{
  max-width: 490px;
}

.max-w-\[500px\]{
  max-width: 500px;
}

.max-w-\[510px\]{
  max-width: 510px;
}

.max-w-\[520px\]{
  max-width: 520px;
}

.max-w-\[525px\]{
  max-width: 525px;
}

.max-w-\[54px\]{
  max-width: 54px;
}

.max-w-\[550px\]{
  max-width: 550px;
}

.max-w-\[560px\]{
  max-width: 560px;
}

.max-w-\[570px\]{
  max-width: 570px;
}

.max-w-\[60px\]{
  max-width: 60px;
}

.max-w-\[650px\]{
  max-width: 650px;
}

.max-w-\[655px\]{
  max-width: 655px;
}

.max-w-\[700px\]{
  max-width: 700px;
}

.max-w-\[8px\]{
  max-width: 8px;
}

.max-w-full{
  max-width: 100%;
}

.max-w-xl{
  max-width: 36rem;
}

.flex-1{
  flex: 1 1 0%;
}

.table-auto{
  table-layout: auto;
}

.-translate-x-1\/2{
  --tw-translate-x: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.-translate-y-1\/2{
  --tw-translate-y: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.translate-x-1\/2{
  --tw-translate-x: 50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.-rotate-45{
  --tw-rotate: -45deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.rotate-180{
  --tw-rotate: 180deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.rotate-45{
  --tw-rotate: 45deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.rotate-90{
  --tw-rotate: 90deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.-scale-y-100{
  --tw-scale-y: -1;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.transform{
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

@keyframes ping{
  75%, 100%{
    transform: scale(2);
    opacity: 0;
  }
}

.animate-ping{
  animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;
}

@keyframes spin{
  to{
    transform: rotate(360deg);
  }
}

.animate-spin{
  animation: spin 1s linear infinite;
}

.cursor-pointer{
  cursor: pointer;
}

.select-none{
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
}

.resize-none{
  resize: none;
}

.list-inside{
  list-style-position: inside;
}

.list-disc{
  list-style-type: disc;
}

.appearance-none{
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}

.break-inside-avoid{
  -moz-column-break-inside: avoid;
       break-inside: avoid;
}

.flex-col{
  flex-direction: column;
}

.flex-wrap{
  flex-wrap: wrap;
}

.items-end{
  align-items: flex-end;
}

.items-center{
  align-items: center;
}

.justify-end{
  justify-content: flex-end;
}

.justify-center{
  justify-content: center;
}

.justify-between{
  justify-content: space-between;
}

.gap-1{
  gap: 0.25rem;
}

.gap-1\.5{
  gap: 0.375rem;
}

.gap-2{
  gap: 0.5rem;
}

.gap-2\.5{
  gap: 0.625rem;
}

.gap-3{
  gap: 0.75rem;
}

.gap-4{
  gap: 1rem;
}

.gap-5{
  gap: 1.25rem;
}

.gap-6{
  gap: 1.5rem;
}

.gap-8{
  gap: 2rem;
}

.gap-\[14px\]{
  gap: 14px;
}

.gap-\[5px\]{
  gap: 5px;
}

.gap-y-2{
  row-gap: 0.5rem;
}

.space-x-1 > :not([hidden]) ~ :not([hidden]){
  --tw-space-x-reverse: 0;
  margin-right: calc(0.25rem * var(--tw-space-x-reverse));
  margin-left: calc(0.25rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-x-2 > :not([hidden]) ~ :not([hidden]){
  --tw-space-x-reverse: 0;
  margin-right: calc(0.5rem * var(--tw-space-x-reverse));
  margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-x-3 > :not([hidden]) ~ :not([hidden]){
  --tw-space-x-reverse: 0;
  margin-right: calc(0.75rem * var(--tw-space-x-reverse));
  margin-left: calc(0.75rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-x-4 > :not([hidden]) ~ :not([hidden]){
  --tw-space-x-reverse: 0;
  margin-right: calc(1rem * var(--tw-space-x-reverse));
  margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-x-5 > :not([hidden]) ~ :not([hidden]){
  --tw-space-x-reverse: 0;
  margin-right: calc(1.25rem * var(--tw-space-x-reverse));
  margin-left: calc(1.25rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-x-\[10px\] > :not([hidden]) ~ :not([hidden]){
  --tw-space-x-reverse: 0;
  margin-right: calc(10px * var(--tw-space-x-reverse));
  margin-left: calc(10px * calc(1 - var(--tw-space-x-reverse)));
}

.space-x-\[6px\] > :not([hidden]) ~ :not([hidden]){
  --tw-space-x-reverse: 0;
  margin-right: calc(6px * var(--tw-space-x-reverse));
  margin-left: calc(6px * calc(1 - var(--tw-space-x-reverse)));
}

.space-y-1 > :not([hidden]) ~ :not([hidden]){
  --tw-space-y-reverse: 0;
  margin-top: calc(0.25rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.25rem * var(--tw-space-y-reverse));
}

.space-y-10 > :not([hidden]) ~ :not([hidden]){
  --tw-space-y-reverse: 0;
  margin-top: calc(2.5rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(2.5rem * var(--tw-space-y-reverse));
}

.space-y-11 > :not([hidden]) ~ :not([hidden]){
  --tw-space-y-reverse: 0;
  margin-top: calc(2.75rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(2.75rem * var(--tw-space-y-reverse));
}

.space-y-2 > :not([hidden]) ~ :not([hidden]){
  --tw-space-y-reverse: 0;
  margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
}

.space-y-20 > :not([hidden]) ~ :not([hidden]){
  --tw-space-y-reverse: 0;
  margin-top: calc(5rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(5rem * var(--tw-space-y-reverse));
}

.space-y-3 > :not([hidden]) ~ :not([hidden]){
  --tw-space-y-reverse: 0;
  margin-top: calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.75rem * var(--tw-space-y-reverse));
}

.space-y-4 > :not([hidden]) ~ :not([hidden]){
  --tw-space-y-reverse: 0;
  margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(1rem * var(--tw-space-y-reverse));
}

.space-y-5 > :not([hidden]) ~ :not([hidden]){
  --tw-space-y-reverse: 0;
  margin-top: calc(1.25rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(1.25rem * var(--tw-space-y-reverse));
}

.space-y-6 > :not([hidden]) ~ :not([hidden]){
  --tw-space-y-reverse: 0;
  margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
}

.space-y-7 > :not([hidden]) ~ :not([hidden]){
  --tw-space-y-reverse: 0;
  margin-top: calc(1.75rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(1.75rem * var(--tw-space-y-reverse));
}

.divide-y > :not([hidden]) ~ :not([hidden]){
  --tw-divide-y-reverse: 0;
  border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
  border-bottom-width: calc(1px * var(--tw-divide-y-reverse));
}

.divide-stroke > :not([hidden]) ~ :not([hidden]){
  --tw-divide-opacity: 1;
  border-color: rgb(223 228 234 / var(--tw-divide-opacity));
}

.self-center{
  align-self: center;
}

.overflow-hidden{
  overflow: hidden;
}

.overflow-x-auto{
  overflow-x: auto;
}

.whitespace-nowrap{
  white-space: nowrap;
}

.rounded{
  border-radius: 0.25rem;
}

.rounded-2xl{
  border-radius: 1rem;
}

.rounded-\[10px\]{
  border-radius: 10px;
}

.rounded-\[15px\]{
  border-radius: 15px;
}

.rounded-\[20px\]{
  border-radius: 20px;
}

.rounded-\[3px\]{
  border-radius: 3px;
}

.rounded-\[5px\]{
  border-radius: 5px;
}

.rounded-\[7px\]{
  border-radius: 7px;
}

.rounded-full{
  border-radius: 9999px;
}

.rounded-lg{
  border-radius: 0.5rem;
}

.rounded-md{
  border-radius: 0.375rem;
}

.rounded-sm{
  border-radius: 0.125rem;
}

.rounded-xl{
  border-radius: 0.75rem;
}

.rounded-b-xl{
  border-bottom-right-radius: 0.75rem;
  border-bottom-left-radius: 0.75rem;
}

.rounded-l-full{
  border-top-left-radius: 9999px;
  border-bottom-left-radius: 9999px;
}

.rounded-l-md{
  border-top-left-radius: 0.375rem;
  border-bottom-left-radius: 0.375rem;
}

.rounded-r-full{
  border-top-right-radius: 9999px;
  border-bottom-right-radius: 9999px;
}

.rounded-r-md{
  border-top-right-radius: 0.375rem;
  border-bottom-right-radius: 0.375rem;
}

.rounded-t-xl{
  border-top-left-radius: 0.75rem;
  border-top-right-radius: 0.75rem;
}

.border{
  border-width: 1px;
}

.border-2{
  border-width: 2px;
}

.border-4{
  border-width: 4px;
}

.border-\[\.5px\]{
  border-width: .5px;
}

.border-\[2\.3px\]{
  border-width: 2.3px;
}

.border-\[2\.7px\]{
  border-width: 2.7px;
}

.border-\[3px\]{
  border-width: 3px;
}

.border-y{
  border-top-width: 1px;
  border-bottom-width: 1px;
}

.border-b{
  border-bottom-width: 1px;
}

.border-b-2{
  border-bottom-width: 2px;
}

.border-b-\[3px\]{
  border-bottom-width: 3px;
}

.border-l{
  border-left-width: 1px;
}

.border-l-\[5px\]{
  border-left-width: 5px;
}

.border-l-\[6px\]{
  border-left-width: 6px;
}

.border-r{
  border-right-width: 1px;
}

.border-r-2{
  border-right-width: 2px;
}

.border-t{
  border-top-width: 1px;
}

.border-dashed{
  border-style: dashed;
}

.border-dotted{
  border-style: dotted;
}

.border-\[\#BFCEFF\]{
  --tw-border-opacity: 1;
  border-color: rgb(191 206 255 / var(--tw-border-opacity));
}

.border-\[\#E4E4E4\]{
  --tw-border-opacity: 1;
  border-color: rgb(228 228 228 / var(--tw-border-opacity));
}

.border-\[\#E8E8E8\]{
  --tw-border-opacity: 1;
  border-color: rgb(232 232 232 / var(--tw-border-opacity));
}

.border-\[\#b7b7b7\]{
  --tw-border-opacity: 1;
  border-color: rgb(183 183 183 / var(--tw-border-opacity));
}

.border-blue-dark{
  --tw-border-opacity: 1;
  border-color: rgb(28 63 183 / var(--tw-border-opacity));
}

.border-body-color{
  --tw-border-opacity: 1;
  border-color: rgb(99 115 129 / var(--tw-border-opacity));
}

.border-current{
  border-color: currentColor;
}

.border-cyan{
  --tw-border-opacity: 1;
  border-color: rgb(1 169 219 / var(--tw-border-opacity));
}

.border-cyan-dark{
  --tw-border-opacity: 1;
  border-color: rgb(11 118 183 / var(--tw-border-opacity));
}

.border-dark{
  --tw-border-opacity: 1;
  border-color: rgb(17 25 40 / var(--tw-border-opacity));
}

.border-dark-6{
  --tw-border-opacity: 1;
  border-color: rgb(156 163 175 / var(--tw-border-opacity));
}

.border-gray-1{
  --tw-border-opacity: 1;
  border-color: rgb(249 250 251 / var(--tw-border-opacity));
}

.border-gray-2{
  --tw-border-opacity: 1;
  border-color: rgb(243 244 246 / var(--tw-border-opacity));
}

.border-gray-3{
  --tw-border-opacity: 1;
  border-color: rgb(229 231 235 / var(--tw-border-opacity));
}

.border-green{
  --tw-border-opacity: 1;
  border-color: rgb(34 173 92 / var(--tw-border-opacity));
}

.border-green-dark{
  --tw-border-opacity: 1;
  border-color: rgb(26 130 69 / var(--tw-border-opacity));
}

.border-green-light-4{
  --tw-border-opacity: 1;
  border-color: rgb(172 239 200 / var(--tw-border-opacity));
}

.border-light{
  --tw-border-opacity: 1;
  border-color: rgb(239 239 239 / var(--tw-border-opacity));
}

.border-primary{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
}

.border-primary\/30{
  border-color: rgb(55 88 249 / 0.3);
}

.border-red{
  --tw-border-opacity: 1;
  border-color: rgb(242 48 48 / var(--tw-border-opacity));
}

.border-red-dark{
  --tw-border-opacity: 1;
  border-color: rgb(225 14 14 / var(--tw-border-opacity));
}

.border-red-light-4{
  --tw-border-opacity: 1;
  border-color: rgb(253 216 216 / var(--tw-border-opacity));
}

.border-secondary{
  --tw-border-opacity: 1;
  border-color: rgb(19 194 150 / var(--tw-border-opacity));
}

.border-stroke{
  --tw-border-opacity: 1;
  border-color: rgb(223 228 234 / var(--tw-border-opacity));
}

.border-transparent{
  border-color: transparent;
}

.border-white{
  --tw-border-opacity: 1;
  border-color: rgb(255 255 255 / var(--tw-border-opacity));
}

.border-yellow{
  --tw-border-opacity: 1;
  border-color: rgb(251 191 36 / var(--tw-border-opacity));
}

.border-yellow-dark{
  --tw-border-opacity: 1;
  border-color: rgb(245 158 11 / var(--tw-border-opacity));
}

.border-l-cyan-dark{
  --tw-border-opacity: 1;
  border-left-color: rgb(11 118 183 / var(--tw-border-opacity));
}

.border-l-yellow{
  --tw-border-opacity: 1;
  border-left-color: rgb(251 191 36 / var(--tw-border-opacity));
}

.border-t-transparent{
  border-top-color: transparent;
}

.bg-\[\#1C9CEA\]{
  --tw-bg-opacity: 1;
  background-color: rgb(28 156 234 / var(--tw-bg-opacity));
}

.bg-\[\#219653\]{
  --tw-bg-opacity: 1;
  background-color: rgb(33 150 83 / var(--tw-bg-opacity));
}

.bg-\[\#4064AC\]{
  --tw-bg-opacity: 1;
  background-color: rgb(64 100 172 / var(--tw-bg-opacity));
}

.bg-\[\#CCCCCE\]{
  --tw-bg-opacity: 1;
  background-color: rgb(204 204 206 / var(--tw-bg-opacity));
}

.bg-\[\#D64937\]{
  --tw-bg-opacity: 1;
  background-color: rgb(214 73 55 / var(--tw-bg-opacity));
}

.bg-\[\#E4E4E4\]{
  --tw-bg-opacity: 1;
  background-color: rgb(228 228 228 / var(--tw-bg-opacity));
}

.bg-\[\#E9F9FF\]{
  --tw-bg-opacity: 1;
  background-color: rgb(233 249 255 / var(--tw-bg-opacity));
}

.bg-\[\#F0F4FF\]{
  --tw-bg-opacity: 1;
  background-color: rgb(240 244 255 / var(--tw-bg-opacity));
}

.bg-\[\#F3F6FF\]{
  --tw-bg-opacity: 1;
  background-color: rgb(243 246 255 / var(--tw-bg-opacity));
}

.bg-\[\#FFA645\]{
  --tw-bg-opacity: 1;
  background-color: rgb(255 166 69 / var(--tw-bg-opacity));
}

.bg-black{
  --tw-bg-opacity: 1;
  background-color: rgb(33 43 54 / var(--tw-bg-opacity));
}

.bg-body-color{
  --tw-bg-opacity: 1;
  background-color: rgb(99 115 129 / var(--tw-bg-opacity));
}

.bg-body-color\/10{
  background-color: rgb(99 115 129 / 0.1);
}

.bg-cyan{
  --tw-bg-opacity: 1;
  background-color: rgb(1 169 219 / var(--tw-bg-opacity));
}

.bg-cyan-dark{
  --tw-bg-opacity: 1;
  background-color: rgb(11 118 183 / var(--tw-bg-opacity));
}

.bg-cyan-light-2\/30{
  background-color: rgb(119 209 243 / 0.3);
}

.bg-cyan\/10{
  background-color: rgb(1 169 219 / 0.1);
}

.bg-dark{
  --tw-bg-opacity: 1;
  background-color: rgb(17 25 40 / var(--tw-bg-opacity));
}

.bg-dark\/10{
  background-color: rgb(17 25 40 / 0.1);
}

.bg-dark\/90{
  background-color: rgb(17 25 40 / 0.9);
}

.bg-gray{
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.bg-gray-1{
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.bg-gray-2{
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.bg-gray-3{
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}

.bg-gray-3\/50{
  background-color: rgb(229 231 235 / 0.5);
}

.bg-green{
  --tw-bg-opacity: 1;
  background-color: rgb(34 173 92 / var(--tw-bg-opacity));
}

.bg-green-dark{
  --tw-bg-opacity: 1;
  background-color: rgb(26 130 69 / var(--tw-bg-opacity));
}

.bg-green-dark\/10{
  background-color: rgb(26 130 69 / 0.1);
}

.bg-green-light-6{
  --tw-bg-opacity: 1;
  background-color: rgb(218 248 230 / var(--tw-bg-opacity));
}

.bg-green\/10{
  background-color: rgb(34 173 92 / 0.1);
}

.bg-inherit{
  background-color: inherit;
}

.bg-primary{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

.bg-primary\/10{
  background-color: rgb(55 88 249 / 0.1);
}

.bg-primary\/5{
  background-color: rgb(55 88 249 / 0.05);
}

.bg-primary\/60{
  background-color: rgb(55 88 249 / 0.6);
}

.bg-red{
  --tw-bg-opacity: 1;
  background-color: rgb(242 48 48 / var(--tw-bg-opacity));
}

.bg-red-dark{
  --tw-bg-opacity: 1;
  background-color: rgb(225 14 14 / var(--tw-bg-opacity));
}

.bg-red-dark\/10{
  background-color: rgb(225 14 14 / 0.1);
}

.bg-red-light-5{
  --tw-bg-opacity: 1;
  background-color: rgb(254 235 235 / var(--tw-bg-opacity));
}

.bg-red-light-6{
  --tw-bg-opacity: 1;
  background-color: rgb(254 243 243 / var(--tw-bg-opacity));
}

.bg-secondary{
  --tw-bg-opacity: 1;
  background-color: rgb(19 194 150 / var(--tw-bg-opacity));
}

.bg-secondary\/10{
  background-color: rgb(19 194 150 / 0.1);
}

.bg-stroke{
  --tw-bg-opacity: 1;
  background-color: rgb(223 228 234 / var(--tw-bg-opacity));
}

.bg-tg-bg{
  --tw-bg-opacity: 1;
  background-color: rgb(247 248 250 / var(--tw-bg-opacity));
}

.bg-transparent{
  background-color: transparent;
}

.bg-white{
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.bg-white\/10{
  background-color: rgb(255 255 255 / 0.1);
}

.bg-yellow{
  --tw-bg-opacity: 1;
  background-color: rgb(251 191 36 / var(--tw-bg-opacity));
}

.bg-yellow-dark{
  --tw-bg-opacity: 1;
  background-color: rgb(245 158 11 / var(--tw-bg-opacity));
}

.bg-yellow-dark\/10{
  background-color: rgb(245 158 11 / 0.1);
}

.bg-yellow-light-4{
  --tw-bg-opacity: 1;
  background-color: rgb(255 251 235 / var(--tw-bg-opacity));
}

.bg-yellow\/30{
  background-color: rgb(251 191 36 / 0.3);
}

.bg-opacity-20{
  --tw-bg-opacity: 0.2;
}

.bg-opacity-70{
  --tw-bg-opacity: 0.7;
}

.bg-opacity-90{
  --tw-bg-opacity: 0.9;
}

.bg-gradient-to-b{
  background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
}

.bg-gradient-to-l{
  background-image: linear-gradient(to left, var(--tw-gradient-stops));
}

.bg-gradient-to-r{
  background-image: linear-gradient(to right, var(--tw-gradient-stops));
}

.bg-gradient-to-t{
  background-image: linear-gradient(to top, var(--tw-gradient-stops));
}

.from-\[\#27F090\]{
  --tw-gradient-from: #27F090 var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(39 240 144 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.from-\[\#FFFFFF14\]{
  --tw-gradient-from: #FFFFFF14 var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.from-gray-1{
  --tw-gradient-from: #F9FAFB var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(249 250 251 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.from-primary{
  --tw-gradient-from: #3758F9 var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(55 88 249 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.from-blue-500{
  --tw-gradient-from: #3b82f6 var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(59 130 246 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.from-transparent{
  --tw-gradient-from: transparent var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.from-primary\/80{
  --tw-gradient-from: rgb(55 88 249 / 0.8) var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(55 88 249 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.from-primary\/10{
  --tw-gradient-from: rgb(55 88 249 / 0.1) var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(55 88 249 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.from-70\%{
  --tw-gradient-from-position: 70%;
}

.from-30\%{
  --tw-gradient-from-position: 30%;
}

.from-50\%{
  --tw-gradient-from-position: 50%;
}

.from-10\%{
  --tw-gradient-from-position: 10%;
}

.via-\[\#7F41F3\]{
  --tw-gradient-to: rgb(127 65 243 / 0)  var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), #7F41F3 var(--tw-gradient-via-position), var(--tw-gradient-to);
}

.via-transparent{
  --tw-gradient-to: rgb(0 0 0 / 0)  var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), transparent var(--tw-gradient-via-position), var(--tw-gradient-to);
}

.via-primary\/10{
  --tw-gradient-to: rgb(55 88 249 / 0)  var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), rgb(55 88 249 / 0.1) var(--tw-gradient-via-position), var(--tw-gradient-to);
}

.via-primary\/30{
  --tw-gradient-to: rgb(55 88 249 / 0)  var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), rgb(55 88 249 / 0.3) var(--tw-gradient-via-position), var(--tw-gradient-to);
}

.via-primary\/50{
  --tw-gradient-to: rgb(55 88 249 / 0)  var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), rgb(55 88 249 / 0.5) var(--tw-gradient-via-position), var(--tw-gradient-to);
}

.via-primary\/80{
  --tw-gradient-to: rgb(55 88 249 / 0)  var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), rgb(55 88 249 / 0.8) var(--tw-gradient-via-position), var(--tw-gradient-to);
}

.via-primary\/40{
  --tw-gradient-to: rgb(55 88 249 / 0)  var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), rgb(55 88 249 / 0.4) var(--tw-gradient-via-position), var(--tw-gradient-to);
}

.via-70\%{
  --tw-gradient-via-position: 70%;
}

.via-40\%{
  --tw-gradient-via-position: 40%;
}

.via-50\%{
  --tw-gradient-via-position: 50%;
}

.via-20\%{
  --tw-gradient-via-position: 20%;
}

.to-\[\#C4C4C400\]{
  --tw-gradient-to: #C4C4C400 var(--tw-gradient-to-position);
}

.to-\[\#F59527\]{
  --tw-gradient-to: #F59527 var(--tw-gradient-to-position);
}

.to-gray-4{
  --tw-gradient-to: #DEE2E6 var(--tw-gradient-to-position);
}

.to-transparent{
  --tw-gradient-to: transparent var(--tw-gradient-to-position);
}

.to-white{
  --tw-gradient-to: #fff var(--tw-gradient-to-position);
}

.to-green-500{
  --tw-gradient-to: #22c55e var(--tw-gradient-to-position);
}

.to-primary{
  --tw-gradient-to: #3758F9 var(--tw-gradient-to-position);
}

.to-primary\/5{
  --tw-gradient-to: rgb(55 88 249 / 0.05) var(--tw-gradient-to-position);
}

.to-70\%{
  --tw-gradient-to-position: 70%;
}

.to-50\%{
  --tw-gradient-to-position: 50%;
}

.to-80\%{
  --tw-gradient-to-position: 80%;
}

.bg-clip-padding{
  background-clip: padding-box;
}

.fill-current{
  fill: currentColor;
}

.stroke-current{
  stroke: currentColor;
}

.object-cover{
  -o-object-fit: cover;
     object-fit: cover;
}

.object-center{
  -o-object-position: center;
     object-position: center;
}

.p-1{
  padding: 0.25rem;
}

.p-10{
  padding: 2.5rem;
}

.p-2{
  padding: 0.5rem;
}

.p-3{
  padding: 0.75rem;
}

.p-4{
  padding: 1rem;
}

.p-5{
  padding: 1.25rem;
}

.p-6{
  padding: 1.5rem;
}

.p-8{
  padding: 2rem;
}

.p-\[25px\]{
  padding: 25px;
}

.px-10{
  padding-left: 2.5rem;
  padding-right: 2.5rem;
}

.px-12{
  padding-left: 3rem;
  padding-right: 3rem;
}

.px-2{
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}

.px-2\.5{
  padding-left: 0.625rem;
  padding-right: 0.625rem;
}

.px-3{
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}

.px-3\.5{
  padding-left: 0.875rem;
  padding-right: 0.875rem;
}

.px-4{
  padding-left: 1rem;
  padding-right: 1rem;
}

.px-5{
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.px-6{
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}

.px-7{
  padding-left: 1.75rem;
  padding-right: 1.75rem;
}

.px-8{
  padding-left: 2rem;
  padding-right: 2rem;
}

.px-\[12px\]{
  padding-left: 12px;
  padding-right: 12px;
}

.px-\[14px\]{
  padding-left: 14px;
  padding-right: 14px;
}

.px-\[18px\]{
  padding-left: 18px;
  padding-right: 18px;
}

.px-\[6px\]{
  padding-left: 6px;
  padding-right: 6px;
}

.py-1{
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.py-1\.5{
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
}

.py-10{
  padding-top: 2.5rem;
  padding-bottom: 2.5rem;
}

.py-12{
  padding-top: 3rem;
  padding-bottom: 3rem;
}

.py-16{
  padding-top: 4rem;
  padding-bottom: 4rem;
}

.py-2{
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.py-2\.5{
  padding-top: 0.625rem;
  padding-bottom: 0.625rem;
}

.py-20{
  padding-top: 5rem;
  padding-bottom: 5rem;
}

.py-24{
  padding-top: 6rem;
  padding-bottom: 6rem;
}

.py-3{
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

.py-4{
  padding-top: 1rem;
  padding-bottom: 1rem;
}

.py-5{
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
}

.py-6{
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

.py-8{
  padding-top: 2rem;
  padding-bottom: 2rem;
}

.py-9{
  padding-top: 2.25rem;
  padding-bottom: 2.25rem;
}

.py-\[10px\]{
  padding-top: 10px;
  padding-bottom: 10px;
}

.py-\[11px\]{
  padding-top: 11px;
  padding-bottom: 11px;
}

.py-\[120px\]{
  padding-top: 120px;
  padding-bottom: 120px;
}

.py-\[13px\]{
  padding-top: 13px;
  padding-bottom: 13px;
}

.py-\[18px\]{
  padding-top: 18px;
  padding-bottom: 18px;
}

.py-\[34px\]{
  padding-top: 34px;
  padding-bottom: 34px;
}

.py-\[5px\]{
  padding-top: 5px;
  padding-bottom: 5px;
}

.py-\[60px\]{
  padding-top: 60px;
  padding-bottom: 60px;
}

.py-\[6px\]{
  padding-top: 6px;
  padding-bottom: 6px;
}

.py-\[70px\]{
  padding-top: 70px;
  padding-bottom: 70px;
}

.py-\[75px\]{
  padding-top: 75px;
  padding-bottom: 75px;
}

.pb-0{
  padding-bottom: 0px;
}

.pb-1{
  padding-bottom: 0.25rem;
}

.pb-10{
  padding-bottom: 2.5rem;
}

.pb-12{
  padding-bottom: 3rem;
}

.pb-16{
  padding-bottom: 4rem;
}

.pb-2{
  padding-bottom: 0.5rem;
}

.pb-20{
  padding-bottom: 5rem;
}

.pb-3{
  padding-bottom: 0.75rem;
}

.pb-4{
  padding-bottom: 1rem;
}

.pb-6{
  padding-bottom: 1.5rem;
}

.pb-8{
  padding-bottom: 2rem;
}

.pb-\[110px\]{
  padding-bottom: 110px;
}

.pb-\[18px\]{
  padding-bottom: 18px;
}

.pb-\[84px\]{
  padding-bottom: 84px;
}

.pl-1{
  padding-left: 0.25rem;
}

.pl-12{
  padding-left: 3rem;
}

.pl-2{
  padding-left: 0.5rem;
}

.pl-3{
  padding-left: 0.75rem;
}

.pl-4{
  padding-left: 1rem;
}

.pl-5{
  padding-left: 1.25rem;
}

.pl-6{
  padding-left: 1.5rem;
}

.pl-7{
  padding-left: 1.75rem;
}

.pl-\[10px\]{
  padding-left: 10px;
}

.pl-\[62px\]{
  padding-left: 62px;
}

.pr-0{
  padding-right: 0px;
}

.pr-0\.5{
  padding-right: 0.125rem;
}

.pr-12{
  padding-right: 3rem;
}

.pr-14{
  padding-right: 3.5rem;
}

.pr-16{
  padding-right: 4rem;
}

.pr-2{
  padding-right: 0.5rem;
}

.pr-4{
  padding-right: 1rem;
}

.pr-5{
  padding-right: 1.25rem;
}

.pr-6{
  padding-right: 1.5rem;
}

.pr-\[10px\]{
  padding-right: 10px;
}

.pt-1{
  padding-top: 0.25rem;
}

.pt-11{
  padding-top: 2.75rem;
}

.pt-16{
  padding-top: 4rem;
}

.pt-2{
  padding-top: 0.5rem;
}

.pt-2\.5{
  padding-top: 0.625rem;
}

.pt-20{
  padding-top: 5rem;
}

.pt-3{
  padding-top: 0.75rem;
}

.pt-4{
  padding-top: 1rem;
}

.pt-6{
  padding-top: 1.5rem;
}

.pt-\[120px\]{
  padding-top: 120px;
}

.text-left{
  text-align: left;
}

.text-center{
  text-align: center;
}

.text-right{
  text-align: right;
}

.text-2xl{
  font-size: 1.5rem;
  line-height: 2rem;
}

.text-3xl{
  font-size: 1.875rem;
  line-height: 2.25rem;
}

.text-4xl{
  font-size: 2.25rem;
  line-height: 2.5rem;
}

.text-\[22px\]{
  font-size: 22px;
}

.text-\[26px\]{
  font-size: 26px;
}

.text-\[32px\]{
  font-size: 32px;
}

.text-\[42px\]{
  font-size: 42px;
}

.text-\[50px\]{
  font-size: 50px;
}

.text-base{
  font-size: 1rem;
  line-height: 1.5rem;
}

.text-lg{
  font-size: 1.125rem;
  line-height: 1.75rem;
}

.text-sm{
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.text-xl{
  font-size: 1.25rem;
  line-height: 1.75rem;
}

.text-xs{
  font-size: 0.75rem;
  line-height: 1rem;
}

.font-bold{
  font-weight: 700;
}

.font-medium{
  font-weight: 500;
}

.font-normal{
  font-weight: 400;
}

.font-semibold{
  font-weight: 600;
}

.uppercase{
  text-transform: uppercase;
}

.capitalize{
  text-transform: capitalize;
}

.italic{
  font-style: italic;
}

.\!leading-\[1\.208\]{
  line-height: 1.208 !important;
}

.leading-\[1\.208\]{
  line-height: 1.208;
}

.leading-\[1\.2\]{
  line-height: 1.2;
}

.leading-\[1\.81\]{
  line-height: 1.81;
}

.leading-\[27px\]{
  line-height: 27px;
}

.leading-loose{
  line-height: 2;
}

.leading-none{
  line-height: 1;
}

.leading-relaxed{
  line-height: 1.625;
}

.leading-tight{
  line-height: 1.25;
}

.text-\[\#004434\]{
  --tw-text-opacity: 1;
  color: rgb(0 68 52 / var(--tw-text-opacity));
}

.text-\[\#464646\]{
  --tw-text-opacity: 1;
  color: rgb(70 70 70 / var(--tw-text-opacity));
}

.text-\[\#9D5425\]{
  --tw-text-opacity: 1;
  color: rgb(157 84 37 / var(--tw-text-opacity));
}

.text-\[\#BC1C21\]{
  --tw-text-opacity: 1;
  color: rgb(188 28 33 / var(--tw-text-opacity));
}

.text-\[\#D0915C\]{
  --tw-text-opacity: 1;
  color: rgb(208 145 92 / var(--tw-text-opacity));
}

.text-black{
  --tw-text-opacity: 1;
  color: rgb(33 43 54 / var(--tw-text-opacity));
}

.text-body-color{
  --tw-text-opacity: 1;
  color: rgb(99 115 129 / var(--tw-text-opacity));
}

.text-cyan{
  --tw-text-opacity: 1;
  color: rgb(1 169 219 / var(--tw-text-opacity));
}

.text-cyan-dark{
  --tw-text-opacity: 1;
  color: rgb(11 118 183 / var(--tw-text-opacity));
}

.text-dark{
  --tw-text-opacity: 1;
  color: rgb(17 25 40 / var(--tw-text-opacity));
}

.text-dark-2{
  --tw-text-opacity: 1;
  color: rgb(31 42 55 / var(--tw-text-opacity));
}

.text-dark-3{
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity));
}

.text-dark-4{
  --tw-text-opacity: 1;
  color: rgb(75 85 99 / var(--tw-text-opacity));
}

.text-dark-5{
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.text-dark-6{
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}

.text-gray-5{
  --tw-text-opacity: 1;
  color: rgb(206 212 218 / var(--tw-text-opacity));
}

.text-green{
  --tw-text-opacity: 1;
  color: rgb(34 173 92 / var(--tw-text-opacity));
}

.text-green-dark{
  --tw-text-opacity: 1;
  color: rgb(26 130 69 / var(--tw-text-opacity));
}

.text-primary{
  --tw-text-opacity: 1;
  color: rgb(55 88 249 / var(--tw-text-opacity));
}

.text-red{
  --tw-text-opacity: 1;
  color: rgb(242 48 48 / var(--tw-text-opacity));
}

.text-red-dark{
  --tw-text-opacity: 1;
  color: rgb(225 14 14 / var(--tw-text-opacity));
}

.text-red-light{
  --tw-text-opacity: 1;
  color: rgb(245 96 96 / var(--tw-text-opacity));
}

.text-secondary{
  --tw-text-opacity: 1;
  color: rgb(19 194 150 / var(--tw-text-opacity));
}

.text-secondary-color{
  --tw-text-opacity: 1;
  color: rgb(136 153 168 / var(--tw-text-opacity));
}

.text-white{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.text-white\/50{
  color: rgb(255 255 255 / 0.5);
}

.text-white\/60{
  color: rgb(255 255 255 / 0.6);
}

.text-white\/80{
  color: rgb(255 255 255 / 0.8);
}

.text-yellow-dark{
  --tw-text-opacity: 1;
  color: rgb(245 158 11 / var(--tw-text-opacity));
}

.text-opacity-80{
  --tw-text-opacity: 0.8;
}

.underline{
  text-decoration-line: underline;
}

.underline-offset-2{
  text-underline-offset: 2px;
}

.placeholder-dark-6::-moz-placeholder{
  --tw-placeholder-opacity: 1;
  color: rgb(156 163 175 / var(--tw-placeholder-opacity));
}

.placeholder-dark-6::placeholder{
  --tw-placeholder-opacity: 1;
  color: rgb(156 163 175 / var(--tw-placeholder-opacity));
}

.opacity-0{
  opacity: 0;
}

.opacity-100{
  opacity: 1;
}

.opacity-40{
  opacity: 0.4;
}

.shadow{
  --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-1{
  --tw-shadow: 0px 1px 3px 0px rgba(166, 175, 195, 0.40);
  --tw-shadow-colored: 0px 1px 3px 0px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-2{
  --tw-shadow: 0px 5px 12px 0px rgba(0, 0, 0, 0.10);
  --tw-shadow-colored: 0px 5px 12px 0px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-\[0px_1px_3px_0px_rgba\(0\2c 0\2c 0\2c 0\.13\)\]{
  --tw-shadow: 0px 1px 3px 0px rgba(0,0,0,0.13);
  --tw-shadow-colored: 0px 1px 3px 0px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-\[0px_20px_95px_0px_rgba\(201\2c 203\2c 204\2c 0\.30\)\]{
  --tw-shadow: 0px 20px 95px 0px rgba(201,203,204,0.30);
  --tw-shadow-colored: 0px 20px 95px 0px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-\[0px_2px_10px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{
  --tw-shadow: 0px 2px 10px 0px rgba(0,0,0,0.08);
  --tw-shadow-colored: 0px 2px 10px 0px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-card{
  --tw-shadow: 0px 1px 3px rgba(0, 0, 0, 0.12);
  --tw-shadow-colored: 0px 1px 3px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-four{
  --tw-shadow: 0px 4px 10px rgba(0, 0, 0, 0.12);
  --tw-shadow-colored: 0px 4px 10px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-inner{
  --tw-shadow: inset 0 2px 4px 0 rgb(0 0 0 / 0.05);
  --tw-shadow-colored: inset 0 2px 4px 0 var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-lg{
  --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-portfolio{
  --tw-shadow: 0px 4px 30px 0px rgba(0, 0, 0, 0.08);
  --tw-shadow-colored: 0px 4px 30px 0px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-pricing{
  --tw-shadow: 0px 39px 23px -27px rgba(0, 0, 0, 0.04);
  --tw-shadow-colored: 0px 39px 23px -27px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-pricing-4{
  --tw-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.12);
  --tw-shadow-colored: 0px 1px 4px 0px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-sm{
  --tw-shadow: 0px 1px 3px 0px rgba(16, 24, 40, 0.10), 0px 1px 2px 0px rgba(16, 24, 40, 0.06);
  --tw-shadow-colored: 0px 1px 3px 0px var(--tw-shadow-color), 0px 1px 2px 0px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-switch-1{
  --tw-shadow: 0px 0px 5px rgba(0, 0, 0, 0.15);
  --tw-shadow-colored: 0px 0px 5px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-testimonial-6{
  --tw-shadow: 0px 10px 20px 0px rgba(92, 115, 160, 0.07);
  --tw-shadow-colored: 0px 10px 20px 0px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-three{
  --tw-shadow: 0px 1px 5px rgba(0, 0, 0, 0.14);
  --tw-shadow-colored: 0px 1px 5px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-two{
  --tw-shadow: 0px 1px 4px rgba(0, 0, 0, 0.12);
  --tw-shadow-colored: 0px 1px 4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-xs{
  --tw-shadow: 0px 1px 2px 0px rgba(16, 24, 40, 0.05);
  --tw-shadow-colored: 0px 1px 2px 0px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-cyan-500{
  --tw-shadow-color: #06b6d4;
  --tw-shadow: var(--tw-shadow-colored);
}

.shadow-pink-500{
  --tw-shadow-color: #ec4899;
  --tw-shadow: var(--tw-shadow-colored);
}

.shadow-violet-500{
  --tw-shadow-color: #8b5cf6;
  --tw-shadow: var(--tw-shadow-colored);
}

.outline-none{
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.ring-primary{
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(55 88 249 / var(--tw-ring-opacity));
}

.filter{
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.transition{
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-all{
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.delay-300{
  transition-delay: 300ms;
}

.duration-100{
  transition-duration: 100ms;
}

.duration-1000{
  transition-duration: 1000ms;
}

.duration-200{
  transition-duration: 200ms;
}

.duration-300{
  transition-duration: 300ms;
}

.duration-\[10s\]{
  transition-duration: 10s;
}

.duration-\[9000ms\]{
  transition-duration: 9000ms;
}

.duration-\[9000s\]{
  transition-duration: 9000s;
}

.\!duration-\[90s\]{
  transition-duration: 90s !important;
}

body {
  font-family: "Inter", sans-serif;
}

.snap {
  scroll-snap-type: x mandatory;
  scroll-behavior: smooth;
}

.snap::-webkit-scrollbar {
  display: none;
}

.snap > img {
  scroll-snap-align: center;
}

.navbarTogglerActive > span:nth-child(1){
  top: 7px;
  --tw-rotate: 45deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.navbarTogglerActive > span:nth-child(2){
  opacity: 0;
}

.navbarTogglerActive > span:nth-child(3){
  top: -0.5rem;
  --tw-rotate: 135deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

input:checked ~ .dot{
  --tw-translate-x: 100%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

input:checked ~ .dot .active{
  display: block;
}

input:checked ~ .dot .inactive{
  display: none;
}

input#toggleFour:checked ~ .box{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

input#toggleFour:checked ~ .dot{
  --tw-translate-x: 100%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

input#toggleFive:checked ~ .dot{
  --tw-translate-x: 100%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

input#toggleFive:checked ~ .dot > span{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

input#toggleSix:checked ~ .dot{
  --tw-translate-x: 100%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

input#toggleEight:checked ~ .box{
  --tw-bg-opacity: 1;
  background-color: rgb(234 238 251 / var(--tw-bg-opacity));
}

input#toggleEight:checked ~ .dot{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

input#toggleEight:checked ~ .dot span{
  --tw-border-opacity: 1;
  border-color: rgb(255 255 255 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

input#toggleNine:checked ~ .dot span{
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

input#toggleNine:checked ~ .dot{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

input:checked ~ .box{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
}

input#checkboxLabelOne:checked ~ .box{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
}

input#checkboxLabelOne:checked ~ .box .dot{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

input#checkboxLabelTwo:checked ~ .box span{
  opacity: 1;
}

input#checkboxLabelThree:checked ~ .box span{
  opacity: 1;
}

input#checkboxLabelFour:checked ~ .box{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
}

input#checkboxLabelFour:checked ~ .box span{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

input#checkboxLabelFive:checked ~ .box{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

.shape-gradient {
  background: linear-gradient(
    180deg,
    rgba(255, 255, 255, 0.08) 0%,
    rgba(196, 196, 196, 0) 100%
  );
}

/* v-2.0 start from here */

.container{
  margin-left: auto;
  margin-right: auto;
  padding-left: 1rem;
  padding-right: 1rem;
}

input[type="checkbox"]:checked ~ .box span{
  opacity: 1;
}

input[type="radio"]:checked ~ .box .circle{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

input[type="radio"]:checked ~ .box span{
  opacity: 1;
}

.payment:checked ~ label{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
  --tw-bg-opacity: 8%;
}

.shipping:checked ~ label{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
}

.shipping:checked ~ label .title{
  --tw-text-opacity: 1;
  color: rgb(55 88 249 / var(--tw-text-opacity));
}

.color:checked ~ label span{
  height: 0.5rem;
  width: 0.5rem;
}

.productColor:checked ~ label span{
  height: 1.75rem;
  width: 1.75rem;
}

.productColor2:checked ~ label span{
  height: 0.75rem;
  width: 0.75rem;
}

.filter-size:checked ~ label{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.filter-size-2:checked ~ label{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
  --tw-bg-opacity: 0.1;
}

.ram-size:checked ~ label{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
  --tw-text-opacity: 1;
  color: rgb(55 88 249 / var(--tw-text-opacity));
}

.download-radio:checked ~ label{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

.download-radio:checked ~ label span{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.download-radio:checked ~ label .icon{
  opacity: 1;
}

/* ============
=============== */

.priceSlideOne .noUi-target{
  margin-top: 2rem;
  border-style: none;
  --tw-bg-opacity: 1;
  background-color: rgb(244 247 255 / var(--tw-bg-opacity));
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.priceSlideOne .noUi-connects{
  height: 6px;
  border-radius: 9999px;
  --tw-bg-opacity: 1;
  background-color: rgb(212 217 232 / var(--tw-bg-opacity));
}

.priceSlideOne .noUi-connect{
  height: 6px;
  border-radius: 9999px;
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

.priceSlideOne .noUi-horizontal .noUi-handle{
  top: -0.5rem;
  height: 22px;
  width: 22px;
  border-radius: 9999px;
  border-width: 6px;
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.priceSlideTwo .noUi-target{
  margin-top: 2rem;
  border-style: none;
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.priceSlideTwo .noUi-connects{
  height: 0.25rem;
  border-radius: 9999px;
  --tw-bg-opacity: 1;
  background-color: rgb(212 217 232 / var(--tw-bg-opacity));
}

.priceSlideTwo .noUi-connect{
  height: 0.25rem;
  border-radius: 9999px;
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

.priceSlideTwo .noUi-horizontal .noUi-handle{
  top: -0.75rem;
  height: 30px;
  width: 30px;
  border-radius: 9999px;
  border-width: 1px;
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.noUi-horizontal .noUi-handle:after,
.noUi-horizontal .noUi-handle:before{
  display: none;
}

#activityChart .apexcharts-legend-series{
  margin-right: 1.25rem !important;
}

/* ======= Switch ======= */

.autoSaverSwitch input:checked ~ .slider{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

.autoSaverSwitch input:checked ~ .slider .dot{
  --tw-translate-x: 1.5rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.autoSaverSwitch input:checked ~ .label .on{
  display: block;
}

.autoSaverSwitch input:checked ~ .label .off{
  display: none;
}

.themeSwitcherTwo input:checked ~ .light{
  background-color: transparent;
  --tw-text-opacity: 1;
  color: rgb(99 115 129 / var(--tw-text-opacity));
}

.themeSwitcherTwo input:checked ~ .dark{
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
  --tw-text-opacity: 1;
  color: rgb(55 88 249 / var(--tw-text-opacity));
}

.themeSwitcherTwo input:checked ~ .slider{
  --tw-bg-opacity: 1;
  background-color: rgb(33 43 54 / var(--tw-bg-opacity));
}

.themeSwitcherTwo input:checked ~ .slider .dot{
  --tw-translate-x: 28px;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.themeSwitcherThree input:checked ~ div .light{
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  --tw-text-opacity: 1;
  color: rgb(99 115 129 / var(--tw-text-opacity));
}

.themeSwitcherThree input:checked ~ div .dark{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

/* box-select-1 */

.checkbox-list:checked ~ label{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

.checkbox-list:checked ~ label .icon{
  opacity: 1;
}

.box-select-1:checked ~ label .box{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

.box-select-1:checked ~ label .box .icon{
  opacity: 1;
}

.box-select-1:checked ~ label div.user-box{
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.select-list:checked ~ label{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
  --tw-text-opacity: 1;
  color: rgb(55 88 249 / var(--tw-text-opacity));
}

.select-list:checked ~ label .icon{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

.tableCheckbox:checked ~ label .icon-box{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

.tableCheckbox:checked ~ label .icon{
  opacity: 1;
}

.tableCheckbox-2:checked ~ label{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

.tableCheckbox-2:checked ~ label .icon{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
  opacity: 1;
}

/* Maps */

.jvm-zoom-btn{
  bottom: 0px;
  left: auto;
  top: auto;
  display: flex;
  height: 2rem;
  width: 2rem;
  align-items: center;
  justify-content: center;
  border-radius: 0.25rem;
  border-width: .5px;
  --tw-border-opacity: 1;
  border-color: rgb(223 228 234 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
  font-weight: 600;
  line-height: 1;
  --tw-text-opacity: 1;
  color: rgb(99 115 129 / var(--tw-text-opacity));
}

.jvm-zoom-btn:hover{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.mapOne .jvm-zoom-btn{
  bottom: 0px;
  left: auto;
  top: auto;
}

.mapOne .jvm-zoom-btn.jvm-zoomin{
  right: 2.25rem;
}

.mapOne .jvm-zoom-btn.jvm-zoomout{
  right: 0px;
}

.mapTwo .jvm-zoom-btn{
  bottom: 0px;
  top: auto;
}

.mapTwo .jvm-zoom-btn.jvm-zoomin{
  left: 0px;
}

.mapTwo .jvm-zoom-btn.jvm-zoomout{
  left: 2.25rem;
}

.mapFour .jvm-zoom-btn{
  top: -5rem;
}

.mapFour .jvm-zoom-btn.jvm-zoomin{
  right: 2.25rem;
}

.mapFour .jvm-zoom-btn.jvm-zoomout{
  right: 0px;
}

@media (min-width: 540px){
  .sm\:container{
    margin-r-ight: auto;
    padding-r-ight: 16px;
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: 16px;
    padding-left: 16px;
  }

  @media (min-width: 400px){
    .sm\:container{
      max-width: 400px;
    }
  }

  @media (min-width: 540px){
    .sm\:container{
      max-width: 540px;
    }
  }

  @media (min-width: 720px){
    .sm\:container{
      max-width: 720px;
    }
  }

  @media (min-width: 960px){
    .sm\:container{
      max-width: 960px;
    }
  }

  @media (min-width: 1140px){
    .sm\:container{
      max-width: 1140px;
    }
  }

  @media (min-width: 1320px){
    .sm\:container{
      max-width: 1320px;
    }
  }
}

.file\:mr-4::file-selector-button{
  margin-right: 1rem;
}

.file\:mr-5::file-selector-button{
  margin-right: 1.25rem;
}

.file\:border-collapse::file-selector-button{
  border-collapse: collapse;
}

.file\:cursor-pointer::file-selector-button{
  cursor: pointer;
}

.file\:rounded::file-selector-button{
  border-radius: 0.25rem;
}

.file\:border-0::file-selector-button{
  border-width: 0px;
}

.file\:border-\[\.5px\]::file-selector-button{
  border-width: .5px;
}

.file\:border-r::file-selector-button{
  border-right-width: 1px;
}

.file\:border-solid::file-selector-button{
  border-style: solid;
}

.file\:border-stroke::file-selector-button{
  --tw-border-opacity: 1;
  border-color: rgb(223 228 234 / var(--tw-border-opacity));
}

.file\:bg-dark-2::file-selector-button{
  --tw-bg-opacity: 1;
  background-color: rgb(31 42 55 / var(--tw-bg-opacity));
}

.file\:bg-gray-2::file-selector-button{
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.file\:bg-gray-3::file-selector-button{
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}

.file\:px-3::file-selector-button{
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}

.file\:px-4::file-selector-button{
  padding-left: 1rem;
  padding-right: 1rem;
}

.file\:px-5::file-selector-button{
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.file\:py-1::file-selector-button{
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.file\:py-3::file-selector-button{
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

.file\:text-base::file-selector-button{
  font-size: 1rem;
  line-height: 1.5rem;
}

.file\:text-body-color::file-selector-button{
  --tw-text-opacity: 1;
  color: rgb(99 115 129 / var(--tw-text-opacity));
}

.file\:text-dark::file-selector-button{
  --tw-text-opacity: 1;
  color: rgb(17 25 40 / var(--tw-text-opacity));
}

.file\:text-white::file-selector-button{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.after\:absolute::after{
  content: var(--tw-content);
  position: absolute;
}

.after\:-bottom-1::after{
  content: var(--tw-content);
  bottom: -0.25rem;
}

.after\:-bottom-1\.5::after{
  content: var(--tw-content);
  bottom: -0.375rem;
}

.after\:left-1\/2::after{
  content: var(--tw-content);
  left: 50%;
}

.after\:h-3::after{
  content: var(--tw-content);
  height: 0.75rem;
}

.after\:w-3::after{
  content: var(--tw-content);
  width: 0.75rem;
}

.after\:-translate-x-1\/2::after{
  content: var(--tw-content);
  --tw-translate-x: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.after\:rotate-45::after{
  content: var(--tw-content);
  --tw-rotate: 45deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.after\:rounded-br-sm::after{
  content: var(--tw-content);
  border-bottom-right-radius: 0.125rem;
}

.after\:bg-inherit::after{
  content: var(--tw-content);
  background-color: inherit;
}

.last-of-type\:border-r-0:last-of-type{
  border-right-width: 0px;
}

.hover\:border-\[\#0BB489\]:hover{
  --tw-border-opacity: 1;
  border-color: rgb(11 180 137 / var(--tw-border-opacity));
}

.hover\:border-\[\#1B44C8\]:hover{
  --tw-border-opacity: 1;
  border-color: rgb(27 68 200 / var(--tw-border-opacity));
}

.hover\:border-blue-dark:hover{
  --tw-border-opacity: 1;
  border-color: rgb(28 63 183 / var(--tw-border-opacity));
}

.hover\:border-body-color:hover{
  --tw-border-opacity: 1;
  border-color: rgb(99 115 129 / var(--tw-border-opacity));
}

.hover\:border-dark:hover{
  --tw-border-opacity: 1;
  border-color: rgb(17 25 40 / var(--tw-border-opacity));
}

.hover\:border-primary:hover{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
}

.hover\:border-red-600:hover{
  --tw-border-opacity: 1;
  border-color: rgb(220 38 38 / var(--tw-border-opacity));
}

.hover\:border-stroke:hover{
  --tw-border-opacity: 1;
  border-color: rgb(223 228 234 / var(--tw-border-opacity));
}

.hover\:border-transparent:hover{
  border-color: transparent;
}

.hover\:bg-\[\#0BB489\]:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(11 180 137 / var(--tw-bg-opacity));
}

.hover\:bg-\[\#1B44C8\]:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(27 68 200 / var(--tw-bg-opacity));
}

.hover\:bg-\[\#E8FBF6\]:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(232 251 246 / var(--tw-bg-opacity));
}

.hover\:bg-\[\#F5F7FD\]:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(245 247 253 / var(--tw-bg-opacity));
}

.hover\:bg-black:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(33 43 54 / var(--tw-bg-opacity));
}

.hover\:bg-blue-dark:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(28 63 183 / var(--tw-bg-opacity));
}

.hover\:bg-blue-light-5:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(225 232 255 / var(--tw-bg-opacity));
}

.hover\:bg-body-color:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(99 115 129 / var(--tw-bg-opacity));
}

.hover\:bg-dark:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(17 25 40 / var(--tw-bg-opacity));
}

.hover\:bg-dark\/90:hover{
  background-color: rgb(17 25 40 / 0.9);
}

.hover\:bg-gray-1:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.hover\:bg-gray-2:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.hover\:bg-gray-3:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}

.hover\:bg-gray-4:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(222 226 230 / var(--tw-bg-opacity));
}

.hover\:bg-gray-50:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.hover\:bg-primary:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

.hover\:bg-primary\/10:hover{
  background-color: rgb(55 88 249 / 0.1);
}

.hover\:bg-primary\/90:hover{
  background-color: rgb(55 88 249 / 0.9);
}

.hover\:bg-red:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(242 48 48 / var(--tw-bg-opacity));
}

.hover\:bg-red-600:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(220 38 38 / var(--tw-bg-opacity));
}

.hover\:bg-secondary\/5:hover{
  background-color: rgb(19 194 150 / 0.05);
}

.hover\:bg-white:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.hover\:bg-opacity-10:hover{
  --tw-bg-opacity: 0.1;
}

.hover\:bg-opacity-90:hover{
  --tw-bg-opacity: 0.9;
}

.hover\:text-body-color:hover{
  --tw-text-opacity: 1;
  color: rgb(99 115 129 / var(--tw-text-opacity));
}

.hover\:text-dark:hover{
  --tw-text-opacity: 1;
  color: rgb(17 25 40 / var(--tw-text-opacity));
}

.hover\:text-green:hover{
  --tw-text-opacity: 1;
  color: rgb(34 173 92 / var(--tw-text-opacity));
}

.hover\:text-green-dark:hover{
  --tw-text-opacity: 1;
  color: rgb(26 130 69 / var(--tw-text-opacity));
}

.hover\:text-primary:hover{
  --tw-text-opacity: 1;
  color: rgb(55 88 249 / var(--tw-text-opacity));
}

.hover\:text-red:hover{
  --tw-text-opacity: 1;
  color: rgb(242 48 48 / var(--tw-text-opacity));
}

.hover\:text-secondary:hover{
  --tw-text-opacity: 1;
  color: rgb(19 194 150 / var(--tw-text-opacity));
}

.hover\:text-white:hover{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.hover\:text-white\/80:hover{
  color: rgb(255 255 255 / 0.8);
}

.hover\:text-opacity-80:hover{
  --tw-text-opacity: 0.8;
}

.hover\:underline:hover{
  text-decoration-line: underline;
}

.hover\:shadow-3:hover{
  --tw-shadow: 0px 4px 12px 0px rgba(13, 10, 44, 0.06);
  --tw-shadow-colored: 0px 4px 12px 0px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.hover\:shadow-lg:hover{
  --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.hover\:drop-shadow-testimonial:hover{
  --tw-drop-shadow: drop-shadow(0px 25px 40px rgba(208, 231, 243, 0.70));
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.file\:hover\:bg-dark\/90:hover::file-selector-button{
  background-color: rgb(17 25 40 / 0.9);
}

.file\:hover\:bg-primary:hover::file-selector-button{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

.file\:hover\:bg-opacity-10:hover::file-selector-button{
  --tw-bg-opacity: 0.1;
}

.focus\:border-primary:focus{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
}

.focus\:ring-2:focus{
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus-visible\:shadow-none:focus-visible{
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.active\:border-\[\#1B44C8\]:active{
  --tw-border-opacity: 1;
  border-color: rgb(27 68 200 / var(--tw-border-opacity));
}

.active\:border-blue-light-5:active{
  --tw-border-opacity: 1;
  border-color: rgb(225 232 255 / var(--tw-border-opacity));
}

.active\:border-primary:active{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
}

.active\:bg-\[\#1B44C8\]:active{
  --tw-bg-opacity: 1;
  background-color: rgb(27 68 200 / var(--tw-bg-opacity));
}

.active\:bg-blue-light-3:active{
  --tw-bg-opacity: 1;
  background-color: rgb(173 188 242 / var(--tw-bg-opacity));
}

.active\:bg-blue-light-5:active{
  --tw-bg-opacity: 1;
  background-color: rgb(225 232 255 / var(--tw-bg-opacity));
}

.disabled\:cursor-default:disabled{
  cursor: default;
}

.disabled\:border-gray-2:disabled{
  --tw-border-opacity: 1;
  border-color: rgb(243 244 246 / var(--tw-border-opacity));
}

.disabled\:border-gray-3:disabled{
  --tw-border-opacity: 1;
  border-color: rgb(229 231 235 / var(--tw-border-opacity));
}

.disabled\:bg-gray-2:disabled{
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.disabled\:bg-gray-3:disabled{
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}

.disabled\:text-dark-5:disabled{
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.group:hover .group-hover\:border-primary{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
}

.group:hover .group-hover\:border-white{
  --tw-border-opacity: 1;
  border-color: rgb(255 255 255 / var(--tw-border-opacity));
}

.group:hover .group-hover\:bg-primary{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

.group:hover .group-hover\:bg-white{
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.group:hover .group-hover\:text-body-color{
  --tw-text-opacity: 1;
  color: rgb(99 115 129 / var(--tw-text-opacity));
}

.group:hover .group-hover\:text-primary{
  --tw-text-opacity: 1;
  color: rgb(55 88 249 / var(--tw-text-opacity));
}

.group:hover .group-hover\:text-white{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.group:hover .group-hover\:opacity-100{
  opacity: 1;
}

.peer:checked ~ .peer-checked\:translate-x-full{
  --tw-translate-x: 100%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.peer:checked ~ .peer-checked\:border-primary{
  --tw-border-opacity: 1;
  border-color: rgb(55 88 249 / var(--tw-border-opacity));
}

.peer:checked ~ .peer-checked\:bg-\[\#EAEEFB\]{
  --tw-bg-opacity: 1;
  background-color: rgb(234 238 251 / var(--tw-bg-opacity));
}

.peer:checked ~ .peer-checked\:bg-primary{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

.peer:checked ~ .peer-checked\:bg-primary\/10{
  background-color: rgb(55 88 249 / 0.1);
}

.peer:checked ~ .peer-checked\:bg-white{
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.peer:checked ~ .peer-checked\:text-white{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.group:has(:checked) .group-has-\[\:checked\]\:bg-primary{
  --tw-bg-opacity: 1;
  background-color: rgb(55 88 249 / var(--tw-bg-opacity));
}

.group:has(:checked) .group-has-\[\:checked\]\:bg-white{
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.group:has(:checked) .group-has-\[\:checked\]\:opacity-100{
  opacity: 1;
}

@media not all and (min-width: 540px){
  .max-sm\:hidden{
    display: none;
  }
}

@media (min-width: 400px){
  .xs\:block{
    display: block;
  }

  .xs\:min-w-\[368px\]{
    min-width: 368px;
  }

  .xs\:max-w-\[368px\]{
    max-width: 368px;
  }

  .xs\:px-10{
    padding-left: 2.5rem;
    padding-right: 2.5rem;
  }

  .xs\:px-8{
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .xs\:text-2xl{
    font-size: 1.5rem;
    line-height: 2rem;
  }
}

@media (min-width: 540px){
  .sm\:bottom-0{
    bottom: 0px;
  }

  .sm\:-mx-4{
    margin-left: -1rem;
    margin-right: -1rem;
  }

  .sm\:mb-0{
    margin-bottom: 0px;
  }

  .sm\:mb-8{
    margin-bottom: 2rem;
  }

  .sm\:mr-4{
    margin-right: 1rem;
  }

  .sm\:block{
    display: block;
  }

  .sm\:flex{
    display: flex;
  }

  .sm\:h-\[46px\]{
    height: 46px;
  }

  .sm\:h-\[60px\]{
    height: 60px;
  }

  .sm\:h-\[70px\]{
    height: 70px;
  }

  .sm\:w-1\/2{
    width: 50%;
  }

  .sm\:w-2\/3{
    width: 66.666667%;
  }

  .sm\:w-\[46px\]{
    width: 46px;
  }

  .sm\:w-\[47px\]{
    width: 47px;
  }

  .sm\:min-w-\[508px\]{
    min-width: 508px;
  }

  .sm\:max-w-\[508px\]{
    max-width: 508px;
  }

  .sm\:max-w-\[60px\]{
    max-width: 60px;
  }

  .sm\:max-w-\[70px\]{
    max-width: 70px;
  }

  .sm\:flex-row{
    flex-direction: row;
  }

  .sm\:gap-4{
    gap: 1rem;
  }

  .sm\:space-x-4 > :not([hidden]) ~ :not([hidden]){
    --tw-space-x-reverse: 0;
    margin-right: calc(1rem * var(--tw-space-x-reverse));
    margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
  }

  .sm\:space-x-5 > :not([hidden]) ~ :not([hidden]){
    --tw-space-x-reverse: 0;
    margin-right: calc(1.25rem * var(--tw-space-x-reverse));
    margin-left: calc(1.25rem * calc(1 - var(--tw-space-x-reverse)));
  }

  .sm\:p-10{
    padding: 2.5rem;
  }

  .sm\:p-12{
    padding: 3rem;
  }

  .sm\:p-14{
    padding: 3.5rem;
  }

  .sm\:p-6{
    padding: 1.5rem;
  }

  .sm\:p-8{
    padding: 2rem;
  }

  .sm\:p-9{
    padding: 2.25rem;
  }

  .sm\:p-\[30px\]{
    padding: 30px;
  }

  .sm\:px-12{
    padding-left: 3rem;
    padding-right: 3rem;
  }

  .sm\:px-4{
    padding-left: 1rem;
    padding-right: 1rem;
  }

  .sm\:px-6{
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .sm\:px-\[30px\]{
    padding-left: 30px;
    padding-right: 30px;
  }

  .sm\:py-4{
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .sm\:py-\[30px\]{
    padding-top: 30px;
    padding-bottom: 30px;
  }

  .sm\:pr-10{
    padding-right: 2.5rem;
  }

  .sm\:text-left{
    text-align: left;
  }

  .sm\:text-2xl{
    font-size: 1.5rem;
    line-height: 2rem;
  }

  .sm\:text-4xl{
    font-size: 2.25rem;
    line-height: 2.5rem;
  }

  .sm\:text-\[22px\]{
    font-size: 22px;
  }

  .sm\:text-\[28px\]{
    font-size: 28px;
  }

  .sm\:text-\[40px\]{
    font-size: 40px;
  }

  .sm\:text-\[40px\]\/\[48px\]{
    font-size: 40px;
    line-height: 48px;
  }

  .sm\:text-\[42px\]{
    font-size: 42px;
  }

  .sm\:text-\[80px\]{
    font-size: 80px;
  }

  .sm\:text-base{
    font-size: 1rem;
    line-height: 1.5rem;
  }

  .sm\:text-lg{
    font-size: 1.125rem;
    line-height: 1.75rem;
  }
}

@media (min-width: 720px){
  .md\:mb-0{
    margin-bottom: 0px;
  }

  .md\:mb-16{
    margin-bottom: 4rem;
  }

  .md\:mr-12{
    margin-right: 3rem;
  }

  .md\:inline-block{
    display: inline-block;
  }

  .md\:flex{
    display: flex;
  }

  .md\:h-\[100px\]{
    height: 100px;
  }

  .md\:h-\[450px\]{
    height: 450px;
  }

  .md\:w-1\/2{
    width: 50%;
  }

  .md\:w-11\/12{
    width: 91.666667%;
  }

  .md\:w-5\/12{
    width: 41.666667%;
  }

  .md\:w-7\/12{
    width: 58.333333%;
  }

  .md\:w-\[100px\]{
    width: 100px;
  }

  .md\:min-w-\[630px\]{
    min-width: 630px;
  }

  .md\:max-w-\[250px\]{
    max-width: 250px;
  }

  .md\:max-w-\[315px\]{
    max-width: 315px;
  }

  .md\:max-w-\[630px\]{
    max-width: 630px;
  }

  .md\:columns-2{
    -moz-columns: 2;
         columns: 2;
  }

  .md\:grid-cols-2{
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .md\:flex-row{
    flex-direction: row;
  }

  .md\:flex-nowrap{
    flex-wrap: nowrap;
  }

  .md\:justify-end{
    justify-content: flex-end;
  }

  .md\:gap-6{
    gap: 1.5rem;
  }

  .md\:space-x-8 > :not([hidden]) ~ :not([hidden]){
    --tw-space-x-reverse: 0;
    margin-right: calc(2rem * var(--tw-space-x-reverse));
    margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
  }

  .md\:rounded-b-none{
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
  }

  .md\:border-b{
    border-bottom-width: 1px;
  }

  .md\:border-b-0{
    border-bottom-width: 0px;
  }

  .md\:border-transparent{
    border-color: transparent;
  }

  .md\:p-10{
    padding: 2.5rem;
  }

  .md\:p-7{
    padding: 1.75rem;
  }

  .md\:p-9{
    padding: 2.25rem;
  }

  .md\:p-\[70px\]{
    padding: 70px;
  }

  .md\:px-10{
    padding-left: 2.5rem;
    padding-right: 2.5rem;
  }

  .md\:px-7{
    padding-left: 1.75rem;
    padding-right: 1.75rem;
  }

  .md\:px-8{
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .md\:px-\[60px\]{
    padding-left: 60px;
    padding-right: 60px;
  }

  .md\:px-\[70px\]{
    padding-left: 70px;
    padding-right: 70px;
  }

  .md\:py-3{
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
  }

  .md\:py-5{
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
  }

  .md\:py-\[60px\]{
    padding-top: 60px;
    padding-bottom: 60px;
  }

  .md\:text-\[100px\]{
    font-size: 100px;
  }

  .md\:text-\[40px\]{
    font-size: 40px;
  }

  .md\:text-\[40px\]\/\[48px\]{
    font-size: 40px;
    line-height: 48px;
  }

  .md\:text-base{
    font-size: 1rem;
    line-height: 1.5rem;
  }

  .md\:text-xl{
    font-size: 1.25rem;
    line-height: 1.75rem;
  }
}

@media (min-width: 960px){
  .lg\:static{
    position: static;
  }

  .lg\:absolute{
    position: absolute;
  }

  .lg\:left-0{
    left: 0px;
  }

  .lg\:top-full{
    top: 100%;
  }

  .lg\:mb-0{
    margin-bottom: 0px;
  }

  .lg\:mb-20{
    margin-bottom: 5rem;
  }

  .lg\:ml-10{
    margin-left: 2.5rem;
  }

  .lg\:ml-12{
    margin-left: 3rem;
  }

  .lg\:ml-auto{
    margin-left: auto;
  }

  .lg\:mr-14{
    margin-right: 3.5rem;
  }

  .lg\:mr-3{
    margin-right: 0.75rem;
  }

  .lg\:mt-0{
    margin-top: 0px;
  }

  .lg\:block{
    display: block;
  }

  .lg\:flex{
    display: flex;
  }

  .lg\:inline-flex{
    display: inline-flex;
  }

  .lg\:hidden{
    display: none;
  }

  .lg\:w-1\/12{
    width: 8.333333%;
  }

  .lg\:w-1\/2{
    width: 50%;
  }

  .lg\:w-1\/3{
    width: 33.333333%;
  }

  .lg\:w-1\/4{
    width: 25%;
  }

  .lg\:w-10\/12{
    width: 83.333333%;
  }

  .lg\:w-2\/12{
    width: 16.666667%;
  }

  .lg\:w-2\/3{
    width: 66.666667%;
  }

  .lg\:w-3\/12{
    width: 25%;
  }

  .lg\:w-5\/12{
    width: 41.666667%;
  }

  .lg\:w-6\/12{
    width: 50%;
  }

  .lg\:w-7\/12{
    width: 58.333333%;
  }

  .lg\:w-\[630px\]{
    width: 630px;
  }

  .lg\:w-\[850px\]{
    width: 850px;
  }

  .lg\:w-auto{
    width: auto;
  }

  .lg\:w-full{
    width: 100%;
  }

  .lg\:min-w-\[738px\]{
    min-width: 738px;
  }

  .lg\:max-w-\[250px\]{
    max-width: 250px;
  }

  .lg\:max-w-\[280px\]{
    max-width: 280px;
  }

  .lg\:max-w-\[738px\]{
    max-width: 738px;
  }

  .lg\:max-w-full{
    max-width: 100%;
  }

  .lg\:columns-3{
    -moz-columns: 3;
         columns: 3;
  }

  .lg\:grid-cols-2{
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .lg\:grid-cols-3{
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .lg\:flex-row{
    flex-direction: row;
  }

  .lg\:justify-end{
    justify-content: flex-end;
  }

  .lg\:justify-center{
    justify-content: center;
  }

  .lg\:justify-between{
    justify-content: space-between;
  }

  .lg\:gap-x-5{
    -moz-column-gap: 1.25rem;
         column-gap: 1.25rem;
  }

  .lg\:space-x-14 > :not([hidden]) ~ :not([hidden]){
    --tw-space-x-reverse: 0;
    margin-right: calc(3.5rem * var(--tw-space-x-reverse));
    margin-left: calc(3.5rem * calc(1 - var(--tw-space-x-reverse)));
  }

  .lg\:rounded-xl{
    border-radius: 0.75rem;
  }

  .lg\:bg-transparent{
    background-color: transparent;
  }

  .lg\:p-8{
    padding: 2rem;
  }

  .lg\:px-10{
    padding-left: 2.5rem;
    padding-right: 2.5rem;
  }

  .lg\:px-12{
    padding-left: 3rem;
    padding-right: 3rem;
  }

  .lg\:px-4{
    padding-left: 1rem;
    padding-right: 1rem;
  }

  .lg\:px-6{
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .lg\:px-7{
    padding-left: 1.75rem;
    padding-right: 1.75rem;
  }

  .lg\:px-8{
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .lg\:py-10{
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
  }

  .lg\:py-4{
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .lg\:py-5{
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
  }

  .lg\:py-7{
    padding-top: 1.75rem;
    padding-bottom: 1.75rem;
  }

  .lg\:py-\[100px\]{
    padding-top: 100px;
    padding-bottom: 100px;
  }

  .lg\:py-\[120px\]{
    padding-top: 120px;
    padding-bottom: 120px;
  }

  .lg\:pb-20{
    padding-bottom: 5rem;
  }

  .lg\:pb-24{
    padding-bottom: 6rem;
  }

  .lg\:pb-\[120px\]{
    padding-bottom: 120px;
  }

  .lg\:pb-\[90px\]{
    padding-bottom: 90px;
  }

  .lg\:pl-\[120px\]{
    padding-left: 120px;
  }

  .lg\:pr-0{
    padding-right: 0px;
  }

  .lg\:pt-0{
    padding-top: 0px;
  }

  .lg\:pt-\[120px\]{
    padding-top: 120px;
  }

  .lg\:pt-\[150px\]{
    padding-top: 150px;
  }

  .lg\:text-right{
    text-align: right;
  }

  .lg\:text-2xl{
    font-size: 1.5rem;
    line-height: 2rem;
  }

  .lg\:text-5xl{
    font-size: 3rem;
    line-height: 1;
  }

  .lg\:text-\[22px\]{
    font-size: 22px;
  }

  .lg\:text-\[28px\]{
    font-size: 28px;
  }

  .lg\:text-\[36px\]{
    font-size: 36px;
  }

  .lg\:text-\[40px\]{
    font-size: 40px;
  }

  .lg\:text-base{
    font-size: 1rem;
    line-height: 1.5rem;
  }

  .lg\:text-xl{
    font-size: 1.25rem;
    line-height: 1.75rem;
  }

  .lg\:shadow-lg{
    --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
  }

  .lg\:shadow-none{
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
  }
}

@media (min-width: 1140px){
  .xl\:ml-11{
    margin-left: 2.75rem;
  }

  .xl\:mr-4{
    margin-right: 1rem;
  }

  .xl\:w-1\/2{
    width: 50%;
  }

  .xl\:w-1\/3{
    width: 33.333333%;
  }

  .xl\:w-1\/4{
    width: 25%;
  }

  .xl\:w-5\/12{
    width: 41.666667%;
  }

  .xl\:w-6\/12{
    width: 50%;
  }

  .xl\:w-8\/12{
    width: 66.666667%;
  }

  .xl\:max-w-\[310px\]{
    max-width: 310px;
  }

  .xl\:max-w-\[315px\]{
    max-width: 315px;
  }

  .xl\:gap-\[50px\]{
    gap: 50px;
  }

  .xl\:p-9{
    padding: 2.25rem;
  }

  .xl\:p-\[50px\]{
    padding: 50px;
  }

  .xl\:px-10{
    padding-left: 2.5rem;
    padding-right: 2.5rem;
  }

  .xl\:px-8{
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .xl\:px-\[60px\]{
    padding-left: 60px;
    padding-right: 60px;
  }

  .xl\:pb-0{
    padding-bottom: 0px;
  }

  .xl\:text-2xl{
    font-size: 1.5rem;
    line-height: 2rem;
  }

  .xl\:text-5xl{
    font-size: 3rem;
    line-height: 1;
  }

  .xl\:text-\[28px\]{
    font-size: 28px;
  }

  .xl\:text-\[40px\]{
    font-size: 40px;
  }

  .xl\:text-xl{
    font-size: 1.25rem;
    line-height: 1.75rem;
  }

  .xl\:leading-\[1\.43\]{
    line-height: 1.43;
  }
}

@media (min-width: 1320px){
  .\32xl\:bottom-8{
    bottom: 2rem;
  }

  .\32xl\:mr-16{
    margin-right: 4rem;
  }

  .\32xl\:w-\[180px\]{
    width: 180px;
  }

  .\32xl\:min-w-\[910px\]{
    min-width: 910px;
  }

  .\32xl\:max-w-\[910px\]{
    max-width: 910px;
  }

  .\32xl\:pl-\[78px\]{
    padding-left: 78px;
  }

  .\32xl\:text-\[22px\]{
    font-size: 22px;
  }
}

@media (prefers-color-scheme: dark){
  .dark\:block{
    display: block;
  }

  .dark\:inline-block{
    display: inline-block;
  }

  .dark\:hidden{
    display: none;
  }

  .dark\:divide-dark-3 > :not([hidden]) ~ :not([hidden]){
    --tw-divide-opacity: 1;
    border-color: rgb(55 65 81 / var(--tw-divide-opacity));
  }

  .dark\:border-dark{
    --tw-border-opacity: 1;
    border-color: rgb(17 25 40 / var(--tw-border-opacity));
  }

  .dark\:border-dark-2{
    --tw-border-opacity: 1;
    border-color: rgb(31 42 55 / var(--tw-border-opacity));
  }

  .dark\:border-dark-3{
    --tw-border-opacity: 1;
    border-color: rgb(55 65 81 / var(--tw-border-opacity));
  }

  .dark\:border-dark-4{
    --tw-border-opacity: 1;
    border-color: rgb(75 85 99 / var(--tw-border-opacity));
  }

  .dark\:border-green{
    --tw-border-opacity: 1;
    border-color: rgb(34 173 92 / var(--tw-border-opacity));
  }

  .dark\:border-primary{
    --tw-border-opacity: 1;
    border-color: rgb(55 88 249 / var(--tw-border-opacity));
  }

  .dark\:border-transparent{
    border-color: transparent;
  }

  .dark\:border-white\/10{
    border-color: rgb(255 255 255 / 0.1);
  }

  .dark\:border-white\/20{
    border-color: rgb(255 255 255 / 0.2);
  }

  .dark\:border-white\/5{
    border-color: rgb(255 255 255 / 0.05);
  }

  .dark\:bg-dark{
    --tw-bg-opacity: 1;
    background-color: rgb(17 25 40 / var(--tw-bg-opacity));
  }

  .dark\:bg-dark-2{
    --tw-bg-opacity: 1;
    background-color: rgb(31 42 55 / var(--tw-bg-opacity));
  }

  .dark\:bg-dark-3{
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity));
  }

  .dark\:bg-dark-4{
    --tw-bg-opacity: 1;
    background-color: rgb(75 85 99 / var(--tw-bg-opacity));
  }

  .dark\:bg-dark-5{
    --tw-bg-opacity: 1;
    background-color: rgb(107 114 128 / var(--tw-bg-opacity));
  }

  .dark\:bg-gray-2{
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity));
  }

  .dark\:bg-gray\/10{
    background-color: rgb(249 250 251 / 0.1);
  }

  .dark\:bg-primary\/10{
    background-color: rgb(55 88 249 / 0.1);
  }

  .dark\:bg-primary\/5{
    background-color: rgb(55 88 249 / 0.05);
  }

  .dark\:bg-red-dark{
    --tw-bg-opacity: 1;
    background-color: rgb(225 14 14 / var(--tw-bg-opacity));
  }

  .dark\:bg-white{
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  }

  .dark\:bg-white\/10{
    background-color: rgb(255 255 255 / 0.1);
  }

  .dark\:bg-white\/5{
    background-color: rgb(255 255 255 / 0.05);
  }

  .dark\:from-dark-4{
    --tw-gradient-from: #4B5563 var(--tw-gradient-from-position);
    --tw-gradient-to: rgb(75 85 99 / 0) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  }

  .dark\:to-dark-5{
    --tw-gradient-to: #6B7280 var(--tw-gradient-to-position);
  }

  .dark\:text-dark-4{
    --tw-text-opacity: 1;
    color: rgb(75 85 99 / var(--tw-text-opacity));
  }

  .dark\:text-dark-6{
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity));
  }

  .dark\:text-dark-7{
    --tw-text-opacity: 1;
    color: rgb(209 213 219 / var(--tw-text-opacity));
  }

  .dark\:text-gray{
    --tw-text-opacity: 1;
    color: rgb(249 250 251 / var(--tw-text-opacity));
  }

  .dark\:text-gray-1{
    --tw-text-opacity: 1;
    color: rgb(249 250 251 / var(--tw-text-opacity));
  }

  .dark\:text-gray-2{
    --tw-text-opacity: 1;
    color: rgb(243 244 246 / var(--tw-text-opacity));
  }

  .dark\:text-light{
    --tw-text-opacity: 1;
    color: rgb(239 239 239 / var(--tw-text-opacity));
  }

  .dark\:text-primary{
    --tw-text-opacity: 1;
    color: rgb(55 88 249 / var(--tw-text-opacity));
  }

  .dark\:text-red{
    --tw-text-opacity: 1;
    color: rgb(242 48 48 / var(--tw-text-opacity));
  }

  .dark\:text-white{
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
  }

  .dark\:placeholder-dark-5::-moz-placeholder{
    --tw-placeholder-opacity: 1;
    color: rgb(107 114 128 / var(--tw-placeholder-opacity));
  }

  .dark\:placeholder-dark-5::placeholder{
    --tw-placeholder-opacity: 1;
    color: rgb(107 114 128 / var(--tw-placeholder-opacity));
  }

  .dark\:opacity-20{
    opacity: 0.2;
  }

  .dark\:opacity-30{
    opacity: 0.3;
  }

  .dark\:shadow-\[0px_20px_95px_0px_rgba\(0\2c 0\2c 0\2c 0\.30\)\]{
    --tw-shadow: 0px 20px 95px 0px rgba(0,0,0,0.30);
    --tw-shadow-colored: 0px 20px 95px 0px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
  }

  .dark\:shadow-box-dark{
    --tw-shadow: 0px 10px 15px 0px rgba(5, 13, 29, 0.18);
    --tw-shadow-colored: 0px 10px 15px 0px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
  }

  .dark\:shadow-card{
    --tw-shadow: 0px 1px 3px rgba(0, 0, 0, 0.12);
    --tw-shadow-colored: 0px 1px 3px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
  }

  .dark\:shadow-none{
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
  }

  .dark\:file\:border-dark-3::file-selector-button{
    --tw-border-opacity: 1;
    border-color: rgb(55 65 81 / var(--tw-border-opacity));
  }

  .dark\:file\:bg-dark-2::file-selector-button{
    --tw-bg-opacity: 1;
    background-color: rgb(31 42 55 / var(--tw-bg-opacity));
  }

  .dark\:file\:bg-dark-3::file-selector-button{
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity));
  }

  .dark\:file\:bg-white\/5::file-selector-button{
    background-color: rgb(255 255 255 / 0.05);
  }

  .dark\:file\:text-dark-6::file-selector-button{
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity));
  }

  .dark\:file\:text-white::file-selector-button{
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
  }

  .dark\:hover\:border-dark:hover{
    --tw-border-opacity: 1;
    border-color: rgb(17 25 40 / var(--tw-border-opacity));
  }

  .dark\:hover\:border-dark-3:hover{
    --tw-border-opacity: 1;
    border-color: rgb(55 65 81 / var(--tw-border-opacity));
  }

  .dark\:hover\:border-primary:hover{
    --tw-border-opacity: 1;
    border-color: rgb(55 88 249 / var(--tw-border-opacity));
  }

  .dark\:hover\:bg-dark:hover{
    --tw-bg-opacity: 1;
    background-color: rgb(17 25 40 / var(--tw-bg-opacity));
  }

  .dark\:hover\:bg-dark-3:hover{
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity));
  }

  .dark\:hover\:bg-primary\/5:hover{
    background-color: rgb(55 88 249 / 0.05);
  }

  .dark\:hover\:bg-white\/10:hover{
    background-color: rgb(255 255 255 / 0.1);
  }

  .dark\:hover\:bg-white\/5:hover{
    background-color: rgb(255 255 255 / 0.05);
  }

  .dark\:hover\:text-dark-3:hover{
    --tw-text-opacity: 1;
    color: rgb(55 65 81 / var(--tw-text-opacity));
  }

  
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{route('home')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">B-Immo</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('home')}}" class="active">Accueil</a></li>
          <li><a href="{{route('mes_biens')}}">Biens</a></li>
          <li class="dropdown"><a href="{{route('louer')}}"><span>A Louer</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="">Appartement à louer</a></li>
              <li><a href="#">Maison à louer</a></li>
              <li><a href="#">Bureaux, Boutique, Magasin à louer</a></li>
              <li><a href="#">Terrain</a></li>
              <li><a href="#">immeuble</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="{{route('vente')}}"><span>A Vendre</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Appartement à vendre</a></li>
              <li><a href="#">Maison à vendre</a></li>
              <li><a href="#">Bureaux, Boutique, Magasin à vendre</a></li>
              <li><a href="#">Terrain</a></li>
              <li><a href="#">immeuble</a></li>
            </ul>
          </li>
          <li><a href="{{route('about')}}">About</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
          <li><a href="{{route('publier')}}">Publier</a></li>
          @guest
            <li><a href="{{route('login')}}">Se connecter</a></li>   
          @endguest       
          @auth
          <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="{{asset('storage/' . Auth::user()->identite) }}" alt="Profile" class="h-12 w-12 rounded-circle">
              <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li>
                <a class="dropdown-item d-flex align-items-center" href="{{route('profile')}}">
                  <span><i class="bi bi-person"></i> My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <form action="{{ route('logout') }}" method="post">
                  @csrf
                  <button type="submit dropdown-item d-flex align-items-center">
                    <span><i class="bi bi-box-arrow-right"></i> Log Out</span>
                  </button>
                    
                </form> 
              </li>
            </ul>
          </li>
          @endauth
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">
    @yield('content')
  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{route('home')}}" class="logo d-flex align-items-center">
            <span class="">ImmoBenin</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Excepturi dignissimos</a></li>
            <li><a href="#">Suscipit distinctio</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
            <li><a href="#">Dinera</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">ImmoBenin</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('client/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('client/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('client/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('client/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('client/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{ asset('client/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('client/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('client/vendor/purecounter/purecounter_vanilla.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('client/js/main.js')}}"></script>
  <script>
        document.getElementById('next-step-1').addEventListener('click', function() {
            document.getElementById('step-1').classList.remove('active');
            document.getElementById('step-2').classList.add('active');
        });

        document.getElementById('prev-step-2').addEventListener('click', function() {
            document.getElementById('step-2').classList.remove('active');
            document.getElementById('step-1').classList.add('active');
        });

        document.getElementById('next-step-2').addEventListener('click', function() {
            document.getElementById('step-2').classList.remove('active');
            document.getElementById('step-3').classList.add('active');
        });

        document.getElementById('prev-step-3').addEventListener('click', function() {
            document.getElementById('step-3').classList.remove('active');
            document.getElementById('step-2').classList.add('active');
        });

        document.getElementById('luxury-property-form').addEventListener('submit', function(event) {
            alert('Formulaire soumis avec succès!');
            event.preventDefault(); // Pour éviter la soumission réelle pour l'exemple
        });
    </script>

</body>
</html>

