<div>
    <h2>SEO Form</h2>
    <input type="text" wire:model.defer="title" placeholder="Title">
    <textarea wire:model.defer="description" placeholder="Description"></textarea>
    <input type="text" wire:model.defer="keywords" placeholder="Keywords">
    <button wire:click="save">Save</button>
</div>
