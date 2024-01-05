<div id="myModal" class="absolute top-0 hidden items-center justify-center z-40 w-full h-full bg-black bg-opacity-40">
    <div class="relative bg-white w-[500px] text-gray-600 min-h-[80%] rounded-xl">
        {{-- close --}}
        <button id="btnCloseModal" class="z-40 absolute -right-2 -top-2 rounded-tr-xl bg-red-400 p-1 flex items-center justify-center">
            <i class="bi bi-x text-white w-8 text-2xl"></i>
        </button>
        {{-- image --}}
        <div class="w-full h-[200px] bg-gray-300 rounded-t-xl"></div>
        {{-- description --}}
        <div class="mt-4 flex flex-col mx-6" >
            <h1 class="text-2xl font-semibold mb-2">event name</h1>
            <p class="text-md mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque doloremque commodi eveniet.</p>
            <div class=" mt-2 flex flex-col space-y-2 w-full">
                <h1 class="text-xl font-semibold">performers</h1>
                <div class="text-sm font-semibold p-4 flex items-center bg-gray-100 rounded-lg w-full h-[43px]">artist 1</div>
                <div class="text-sm font-semibold p-4 flex items-center bg-gray-100 rounded-lg w-full h-[43px]">artist 2</div>
                <div class="text-sm font-semibold p-4 flex items-center bg-gray-100 rounded-lg w-full h-[43px]">artist 3</div>
                <div class="text-sm font-semibold p-4 flex items-center bg-gray-100 rounded-lg w-full h-[43px]">artist 4</div>
                <div class="text-sm font-semibold p-4 flex items-center bg-gray-100 rounded-lg w-full h-[43px]">artist 5</div>
            </div>
        </div>
        {{-- buttons --}}
        <div class="w-full px-6 h-[80px] flex items-center justify-center">
            <button class="bg-blue-400 text-white font-semibold w-[100px] py-1 rounded-xl shadow-md shadow-blue-200">beli</button>
        </div>
    </div>
</div>
<script>
    var modal = document.getElementById('myModal');
    var btnShowModals = document.querySelectorAll('.btnShowModal');
    var btnCloseModal = document.getElementById('btnCloseModal');

    btnShowModals.forEach(function(btnShowModal) {
        btnShowModal.onclick = function() {
            modal.style.display = 'flex';
        };
    });

    btnCloseModal.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
</script>
