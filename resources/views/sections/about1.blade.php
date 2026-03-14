<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward_ios" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_back_ios" />
<style>
section {
    justify-content: center;
    align-items: center;
    display: flex;
}

.material-symbols-outlined0 {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 24
}

.material-symbols-outlined1 {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 24
}

.main-container {
  width:41vw ;
  height:12vh ;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-image: url('{{ asset("images/background.webp") }}');
  background-size: cover;
  background-position: center;
  z-index: 0;
}

.bashayer {
  width: 200%;
  height: 200%;
  z-index: 1;
}

@font-face {
    font-family: 'name';
    src: url('{{ asset("fonts/name.ttf") }}') format('truetype');
}

@font-face {
    font-family:naskh;
    src: url('{{ asset("fonts/naskh.ttf") }}') format('truetype');
}

.h1-B {
  font-size: 6rem;
  color: #6d6c69;
  font-family: 'name', sans-serif;
  position: absolute;
  top: 112%;
  left: 50%;
  z-index: -1;
  transform: translate(-50%, -50%);

}

.h3-A {
  font-size: 1.3rem;
  color: #6d6c69;
  font-family: 'name', sans-serif;
  position: absolute;
  top: 118%;
  left: 60%;
  z-index: -1;
  transform: translate(-50%, -50%);
}

.h4-F{
    font-size: 0.7rem;
    color: white;
    font-family: 'name', sans-serif;
    position: absolute;
    top: 125%;
    left: 62%;
    z-index: -1;
    transform: translate(-50%, -50%);
}

.p-A{
    font-size: 0.7rem;
    color: white;
    font-family: 'name', sans-serif;
    position: absolute;
    top: 130%;
    left: 62%;
    z-index: -1;
    width: 10%;
    transform: translate(-50%, -50%);
}
.h1{
    font-size: 5rem;
    color: #eab855;
    font-family: 'naskh', serif;
    position: absolute;
    top: 170%;
    width: 20%;
    left: 60%;
    z-index: 2;
    transform: translate(-50%, -50%);
}

.p{
    font-size: 1.3rem;
    color: white;
    position: absolute;
    top: 184%;
    width: 20%;
    left: 60%;
    z-index: 2;
    transform: translate(-50%, -50%);
}

.najabh{
    position: absolute;
    z-index: 2;
    top: 190%;
    left: 64.2%;
    font-family: 'name' sans-serif;
    color: white;
}

.مؤسس{
    position: absolute;
    font-family: 'name' sans-serif;
    z-index: 2;
    top: 190%;
    left: 30%;
    color: white;
}
</style>
<section>
    <div class="main-container">
        <h1 class="h1-B">BASHAYER</h1>
        <h3 class="h3-A">ALZAHRANI</h3>
        <img class="bashayer" src="{{ asset('images/bashayer-about.webp') }}" alt="bashayer">
        <h4 class="h4-F">Founder & strategic financial analyst</h4>
        <p class="p-A">اكثر من 12 عاما في قطاعين العام والخاص</p>
        <h1 class="h1">إعادة تعريف الاعلام المالي</h1>
        <p class="p">نحو قراءة جديدة لسوق يشهد تحولا تاريخيا</p>
        <p class="najabh">www.najabh.com</p>
        <p class="مؤسس">نبذة عن مؤسس</p>
    </div>
</section>