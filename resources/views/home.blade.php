<x-layout>
</x-layout>

@auth

<div class="flex justify-center items-center h-screen">
    <label for="my_modal_6" class="btn text-4xl font-bold uppercase menu bg-black text-white  rounded-box z-[1] w-90 p-8 shadow-2xl">Logged In</label>
</div>


<!-- Put this part before </body> tag -->
<input type="checkbox" id="my_modal_6" class="modal-toggle" />
<div class="modal" role="dialog">
  <div class="modal-box">
    <h3 class="text-lg font-bold"> Welcome {{ auth()->user()->username }}</h3>
    <p class="py-4">You are currently on the login page!</p>
    <div class="modal-action">
      <label for="my_modal_6" class="btn">Close!</label>
    </div>
  </div>
</div>

@endauth


@guest

<div class="flex justify-center items-center h-screen">
  <label for="my_modal_6" class="btn text-4xl font-bold uppercase menu bg-black text-white  rounded-box z-[1] w-90 p-8 shadow-2xl">Gest User</label>
</div>


<!-- Put this part before </body> tag -->
<input type="checkbox" id="my_modal_6" class="modal-toggle" />
<div class="modal" role="dialog">
<div class="modal-box">
  <h3 class="text-lg font-bold"> Welcome Gest User</h3>
  <p class="py-4">You are currently on the gest user page!</p>
  <div class="modal-action">
    <label for="my_modal_6" class="btn">Close!</label>
  </div>
</div>
</div>
    
@endguest