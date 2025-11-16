<h1>Result</h1>

<table style="border: 1px solid #1b1b18; border-collapse: collapse;">
    <thead>
        <tr>
            <th style="border: 1px solid #1b1b18;">People</th>
            <th style="border: 1px solid #1b1b18;">Cards</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cards as $card)
            <tr>
                <td style="border-right: 1px solid #1b1b18;">
                    P{{ $loop->index + 1 }}
                </td>
                <td >
                    @foreach ($card as $subcard)
                        @if (!$loop->last)
                            {{ $subcard }}
                        @else
                            {{ $subcard . ','}}
                        @endif
                    @endforeach
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<a href="{{ route('main') }}" class="px-4 py-2 bg-black text-white rounded hover:bg-gray-800">
    Back
</a>

