<?php

use Livewire\Component;
use App\Models\NewsletterSubscriber;

new class extends Component {
    public $email = '';

    protected $rules = [
        'email' => 'required|email|unique:newsletter_subscribers,email',
    ];

    public function save()
    {
        $this->validate();

        NewsletterSubscriber::create(['email' => $this->email]);

        $this->reset('email');
        session()->flash('message', 'Thank you for subscribing!');
    }

    public function render()
    {
        return view('components.⚡newsletter-form');
    }
};
?>

<div>
    <form wire:submit.prevent="save" class="space-y-3">
        <div class="relative">
            <input type="email" wire:model="email" placeholder="Votre addresse mail" required
                class="w-full px-4 py-3 bg-on-surface/10 border border-on-surface/20 rounded-[var(--radius-lg)] text-on-surface placeholder-on-surface/50 focus:outline-none focus:border-on-surface/50 focus:ring-1 focus:ring-on-surface/30 transition-all duration-200 text-sm font-body-md pr-[150px] overflow-x-auto"
                style="white-space: nowrap; text-overflow: clip;">

            <button type="submit" wire:loading.attr="disabled"
                class="absolute right-1 top-1 bottom-1 px-4 bg-secondary hover:bg-secondary/90 text-on-secondary rounded-[var(--radius-lg)] font-body-md text-sm font-medium cursor-pointer transition-all duration-200 flex items-center gap-2 group">
                <span wire:loading.remove wire:target="save">Suscrire</span>
                <span wire:loading wire:target="save">
                    <svg class="inline w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                </span>
                <svg wire:loading.remove wire:target="save"
                    class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

        @if (session()->has('message'))
            <div class="text-xs text-green-600 font-body-md">{{ session('message') }}</div>
        @endif
        @error('email')
            <div class="text-xs text-rose-600 font-body-md">{{ $message }}</div>
        @enderror
    </form>
</div>
