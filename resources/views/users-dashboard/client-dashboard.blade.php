<div class='flex items-center'>
    <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
        <div class='max-w-md mx-auto space-y-6'>

            <form action="{{ route('applications.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <h2 class="text-2xl font-bold ">Отправьте заявку</h2>
                <hr class="my-6">
                <label class="uppercase text-sm font-bold opacity-70">Тема</label>
                <input type="text" name="subject" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none" required>

                <label class="uppercase text-sm font-bold opacity-70">Сообщения</label>
                <textarea class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded" name="message" rows="5" required></textarea>

                <label class="uppercase text-sm font-bold opacity-70">Файл</label>
                <input type="file" name="file" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">

                <input type="submit" class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300" value="Отправить">
            </form>

        </div>
    </div>
</div>