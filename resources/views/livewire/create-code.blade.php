<div class="flex justify-center mt-8">
    <form action="" method="get">
        <textarea wire:model.live="message" name="" cols="30" rows="10" class="bg-white/10 text-white p-3 rounded">
        </textarea>

    </form>
    <p class="text-white">
        {{ $message }}
    </p>
</div>

@dd($this->letters())
