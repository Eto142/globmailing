@include('home.header')

<main class="main-content">
    <div class="content-wrapper">
        @if(session('success'))
            <div class="alert alert-success border-0 shadow-sm d-flex align-items-center mb-4">
                <i class="bi bi-check-circle-fill me-2"></i>
                {{ session('success') }}
            </div>
        @endif

        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
            <div>
                <h3 class="fw-bold mb-1">Sent Emails</h3>
                <p class="text-muted mb-0">
                    {{ number_format($totalEmails) }} {{ Str::plural('email', $totalEmails) }} in the history
                </p>
            </div>

            @if($totalEmails > 0)
                <form action="{{ route('sent-emails.clear') }}" method="POST"
                      onsubmit="return confirm('Clear every sent email record? This cannot be undone.')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger px-3">
                        <i class="bi bi-trash3 me-2"></i>Clear All
                    </button>
                </form>
            @endif
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr class="text-muted small text-uppercase">
                                <th class="ps-4 py-3 border-0">Recipient</th>
                                <th class="py-3 border-0">Subject</th>
                                <th class="py-3 border-0">Message</th>
                                <th class="py-3 border-0">Sent</th>
                                <th class="pe-4 py-3 border-0 text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($emails as $email)
                            <tr>
                                <td class="ps-4 py-3">
                                    <div class="d-flex align-items-center">
                                        <span class="rounded-circle bg-primary-subtle text-primary d-inline-flex align-items-center justify-content-center me-3"
                                              style="width: 38px; height: 38px;">
                                            <i class="bi bi-envelope"></i>
                                        </span>
                                        <span class="fw-semibold text-break">{{ $email->to }}</span>
                                    </div>
                                </td>
                                <td class="py-3">
                                    <span class="fw-semibold">{{ $email->subject }}</span>
                                </td>
                                <td class="py-3 text-muted" style="max-width: 320px;">
                                    {{ Str::limit($email->message, 55) }}
                                </td>
                                <td class="py-3 text-muted" style="white-space: nowrap;">
                                    {{ $email->created_at->format('d M Y') }}<br>
                                    <small>{{ $email->created_at->format('H:i') }}</small>
                                </td>
                                <td class="pe-4 py-3 text-end">
                                    <form action="{{ route('sent-emails.destroy', $email) }}" method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Delete this sent email record?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-light text-danger border-0" title="Delete email">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center py-5">
                                    <div class="text-muted">
                                        <i class="bi bi-envelope-check fs-1 d-block mb-2"></i>
                                        <span>No sent emails yet.</span>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($emails->hasPages())
                    <div class="d-flex justify-content-center border-top px-4 py-3">
                        {{ $emails->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</main>

@include('home.footer')
