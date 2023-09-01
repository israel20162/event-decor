<div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Feedback</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Submitted At</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($feedbacks as $feedback)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $feedback->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $feedback->email }}</td>
                    <td class="px-6 py-4">{{ $feedback->feedback }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $feedback->created_at->format('d M, Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

