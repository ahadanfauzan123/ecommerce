<div class="h-[20vh] w-full bg-white flex items-center justify-center space-x-[70px]">
    <div class="flex items-center">
        <h1 id="hari" class="text-7xl font-extrabold text-purple-400"></h1>
        <p class="z-20 -ml-2 text-lg font-semibold text-gray-500">hari</p>
    </div>
    <div class="flex items-center">
        <h1 id="jam" class="text-7xl font-extrabold text-purple-400"></h1>
        <p class="z-20 -ml-2 text-lg font-semibold text-gray-500">jam</p>
    </div>
    <div class="flex items-center">
        <h1 id="menit" class="text-7xl font-extrabold text-purple-400"></h1>
        <p class="z-20 -ml-2 text-lg font-semibold text-gray-500">menit</p>
    </div>
    <div class="flex items-center">
        <h1 id="detik" class="text-7xl font-extrabold text-purple-400"></h1>
        <p class="z-20 -ml-2 text-lg font-semibold text-gray-500">detik</p>
    </div>
</div>
<script>
    var countDownDate = new Date("Dec 25, 2023 16:37:52").getTime();
    var myfunc = setInterval(function() {
// code goes here
    var now = new Date().getTime();
    var timeleft = countDownDate - now;
        
    var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
    document.getElementById("hari").innerHTML = days
    document.getElementById("jam").innerHTML = hours 
    document.getElementById("menit").innerHTML = minutes 
    document.getElementById("detik").innerHTML = seconds
    }, 1000)
</script>
