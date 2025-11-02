@props(['options' => []])

<select {{ $attributes->merge(['class' => 'border-gray-300 focus:border-red-400 focus:ring-transparent rounded-md shadow-sm']) }}>
    @foreach($options as $id => $value)
        <option value="{{ $id }}">{{ $value }}</option>
    @endforeach
</select>
