@props(['disabled' => false, 'name'])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm' .
        ($errors->has($attributes->get('name'))
            ? ' border-red-600 dark:border-red-400 focus:border-red-600 dark:focus:border-red-400 focus:ring-red-600 dark:focus:ring-red-400'
            : ''),
]) !!}>
