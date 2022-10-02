<x-layout>
    <x-slot name="title">
        タスク管理
    </x-slot>
    <x-slot name="app">
        タスク管理
    </x-slot>
    <a href="">[新規登録]</a>

    <ul>
        @forelse ($todos as $todo)
            <li class="flex">
                @if ($todo->check === 0)
                    <p>{{ $todo->content }}</p>
                    <form action="" method="post">
                        @method('PATCH')
                        @csrf
                        <button class="text-red-600">完了</button>
                    </form>
                @else
                    <p class="line-through">{{ $todo->content}}</p>
                    <form action="" method="post">
                        @method('PATCH')
                        @csrf
                        <button class="text-gray-300">完了</button>
                    </form>
                @endif
                <form action="" method="post" id="delete_todo">
                    @method('DELETE')
                    @csrf
                    <button class="text-red-600">削除</button>
                </form>
            </li>
        @empty
            <li>登録されたタスクはありません</li>
        @endforelse
    </ul>

    <script>
        'use strict';

        {
            document.getElementById('delete_todo').addEventListener('submit', e => {
                e.preventDefault();

                if (!confirm('本当に削除しますか？')) {
                    return;
                }

                e.target.submit();
            });
        }
    </script>
</x-layout>
