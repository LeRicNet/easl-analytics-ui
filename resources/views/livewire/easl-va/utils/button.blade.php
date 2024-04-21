<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <button onclick="openFloatingPanel('{{ $id }}')"
            title="{{ $title }}"
            class="p-1 h-[44px] w-[45px] border border-solid
            border-gray-300 rounded hover:shadow click:shadow-inner">
        {!! file_get_contents(public_path($icon_path)) !!}
    </button>
</div>