<div class="space-y-1">
    {{-- Label avec astérisque si champ obligatoire --}}
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">
            {{ $label }}
        </label>
    @endif

    {{-- Champ de saisie — bordure rouge en cas d'erreur de validation --}}
    <input
        type ="{{ $type }}"
        id= "{{ $name }}"
        name ="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
    >
</div>
