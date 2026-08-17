@extends('admin.layout')

@section('title', 'Certifications Manager')

@section('styles')
<style>
.section-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 24px;
}
.section-header h2 {
  font-size: 22px;
  color: var(--ink-100);
}
.btn-add {
  padding: 12px 20px;
  background: var(--cyan);
  color: #03150d;
  font-weight: 700;
  font-size: 13.5px;
  border-radius: 10px;
  border: none;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: all 0.2s;
}
.btn-add:hover { background: #5cf0ac; transform: translateY(-2px); }

/* Table */
.card-table {
  background: var(--navy-900);
  border: 1px solid var(--line-strong);
  border-radius: 16px;
  overflow: hidden;
}
table {
  width: 100%;
  border-collapse: collapse;
  text-align: left;
}
th {
  background: rgba(16, 34, 86, 0.5);
  padding: 16px 20px;
  font-size: 12px;
  font-family: 'JetBrains Mono', monospace;
  text-transform: uppercase;
  color: var(--ink-400);
  border-bottom: 1px solid var(--line);
}
td {
  padding: 16px 20px;
  font-size: 14px;
  border-bottom: 1px solid var(--line);
  vertical-align: middle;
}
tr:last-child td { border-bottom: none; }
tr:hover td { background: rgba(244, 246, 252, 0.02); }

.badge-tag {
  display: inline-block;
  padding: 4px 10px;
  border-radius: 6px;
  background: rgba(56, 237, 248, 0.15);
  border: 1px solid rgba(56, 237, 248, 0.3);
  color: var(--cyan);
  font-weight: 700;
  font-size: 12px;
  font-family: 'JetBrains Mono', monospace;
}

.cert-img-thumb {
  width: 48px;
  height: 48px;
  border-radius: 8px;
  object-fit: cover;
  border: 1px solid var(--line);
  background: var(--navy-800);
}

.btn-icon {
  padding: 6px 12px;
  border-radius: 6px;
  font-size: 12.5px;
  font-weight: 600;
  cursor: pointer;
  border: none;
  margin-right: 6px;
  transition: opacity 0.2s;
}
.btn-edit { background: rgba(96, 165, 250, 0.2); color: var(--blue); }
.btn-delete { background: rgba(239, 68, 68, 0.2); color: #fca5a5; }
.btn-icon:hover { opacity: 0.8; }

/* Modal */
.modal-backdrop {
  position: fixed;
  inset: 0;
  background: rgba(3, 7, 18, 0.8);
  backdrop-filter: blur(6px);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  z-index: 999;
  opacity: 0;
  pointer-events: none;
  transition: all 0.25s ease;
}
.modal-backdrop.active {
  opacity: 1;
  pointer-events: auto;
}
.modal-card {
  width: 100%;
  max-width: 520px;
  background: var(--navy-900);
  border: 1px solid var(--line-strong);
  border-radius: 20px;
  padding: 32px;
  box-shadow: 0 25px 60px rgba(0,0,0,0.6);
}
.modal-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 24px;
}
.modal-header h3 { font-size: 18px; color: var(--ink-100); }
.btn-close {
  background: none;
  border: none;
  color: var(--ink-400);
  font-size: 22px;
  cursor: pointer;
}

.form-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
}
.form-group {
  margin-bottom: 16px;
}
.form-group.full { grid-column: span 2; }
.form-group label {
  display: block;
  font-size: 12px;
  font-family: 'JetBrains Mono', monospace;
  text-transform: uppercase;
  color: var(--ink-400);
  margin-bottom: 6px;
}
.form-control {
  width: 100%;
  padding: 12px 14px;
  background: var(--navy-950);
  border: 1px solid var(--line-strong);
  border-radius: 8px;
  color: var(--ink-100);
  font-size: 14px;
  outline: none;
}
.form-control:focus { border-color: var(--cyan); }
.file-hint { font-size: 11px; color: var(--ink-400); margin-top: 4px; }

.modal-actions {
  display: flex;
  justify-content: flex-end;
  gap: 12px;
  margin-top: 24px;
}
.btn-cancel {
  padding: 10px 18px;
  background: var(--navy-800);
  border: 1px solid var(--line);
  color: var(--ink-300);
  border-radius: 8px;
  cursor: pointer;
}
.btn-save {
  padding: 10px 22px;
  background: var(--cyan);
  color: #03150d;
  font-weight: 700;
  border-radius: 8px;
  border: none;
  cursor: pointer;
}
</style>
@endsection

@section('content')
<div class="section-header">
  <h2>Credentials & Training List</h2>
  <button class="btn-add" onclick="openAddModal()">+ Add New Certification</button>
</div>

<div class="card-table">
  <table>
    <thead>
      <tr>
        <th>Badge</th>
        <th>Image</th>
        <th>Title</th>
        <th>Issuer</th>
        <th>Year</th>
        <th>Order</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($certifications as $cert)
        <tr>
          <td><span class="badge-tag">{{ $cert->badge_text ?? 'CERT' }}</span></td>
          <td>
            @if($cert->image_path)
              <img src="{{ asset($cert->image_path) }}" alt="{{ $cert->title }}" class="cert-img-thumb">
            @else
              <div class="cert-img-thumb" style="display:flex;align-items:center;justify-content:center;font-size:10px;color:var(--ink-400);">No Img</div>
            @endif
          </td>
          <td>
            <strong>{{ $cert->title }}</strong>
            @if($cert->credential_url)
              <br><a href="{{ $cert->credential_url }}" target="_blank" style="font-size:11px;color:var(--cyan);text-decoration:none;">View Link ↗</a>
            @endif
          </td>
          <td>{{ $cert->issuer ?? '—' }}</td>
          <td>{{ $cert->year ?? '—' }}</td>
          <td>{{ $cert->sort_order }}</td>
          <td>
            <button class="btn-icon btn-edit" onclick='openEditModal(@json($cert))'>Edit</button>
            <form method="POST" action="{{ route('admin.certifications.destroy', $cert->id) }}" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this certification?');">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn-icon btn-delete">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="7" style="text-align: center; color: var(--ink-400); padding: 40px;">
            No certifications added yet. Click "+ Add New Certification" to create one.
          </td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>

<!-- Modal Form -->
<div class="modal-backdrop" id="certModal">
  <div class="modal-card">
    <div class="modal-header">
      <h3 id="modalTitle">Add New Certification</h3>
      <button class="btn-close" onclick="closeModal()">×</button>
    </div>
    <form id="certForm" method="POST" action="{{ route('admin.certifications.store') }}" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="_method" id="formMethod" value="POST">
      
      <div class="form-grid">
        <div class="form-group full">
          <label for="title">Certification Title *</label>
          <input type="text" name="title" id="cert_title" class="form-control" placeholder="e.g. Google Analytics Certification" required>
        </div>

        <div class="form-group">
          <label for="issuer">Issuer Name</label>
          <input type="text" name="issuer" id="cert_issuer" class="form-control" placeholder="e.g. Google / HubSpot">
        </div>

        <div class="form-group">
          <label for="year">Year / Date</label>
          <input type="text" name="year" id="cert_year" class="form-control" placeholder="e.g. 2024">
        </div>

        <div class="form-group">
          <label for="badge_text">Badge Code (2-4 chars)</label>
          <input type="text" name="badge_text" id="cert_badge_text" class="form-control" placeholder="e.g. GA, SEO, DM">
        </div>

        <div class="form-group">
          <label for="sort_order">Display Order</label>
          <input type="number" name="sort_order" id="cert_sort_order" class="form-control" value="0">
        </div>

        <div class="form-group full">
          <label for="credential_url">Credential URL (Optional)</label>
          <input type="url" name="credential_url" id="cert_credential_url" class="form-control" placeholder="https://">
        </div>

        <div class="form-group full">
          <label for="image">Upload Certificate Image / Badge (Optional)</label>
          <input type="file" name="image" id="cert_image" class="form-control" accept="image/*">
          <div class="file-hint">Upload PNG, JPG, WebP image of your certificate or badge logo.</div>
        </div>
      </div>

      <div class="modal-actions">
        <button type="button" class="btn-cancel" onclick="closeModal()">Cancel</button>
        <button type="submit" class="btn-save">Save Certification</button>
      </div>
    </form>
  </div>
</div>
@endsection

@section('scripts')
<script>
const modal = document.getElementById('certModal');
const form = document.getElementById('certForm');
const modalTitle = document.getElementById('modalTitle');
const formMethod = document.getElementById('formMethod');

function openAddModal() {
  modalTitle.innerText = "Add New Certification";
  form.action = "{{ route('admin.certifications.store') }}";
  formMethod.value = "POST";
  form.reset();
  modal.classList.add('active');
}

function openEditModal(cert) {
  modalTitle.innerText = "Edit Certification";
  form.action = "/admin/certifications/" + cert.id;
  formMethod.value = "PUT";

  document.getElementById('cert_title').value = cert.title || '';
  document.getElementById('cert_issuer').value = cert.issuer || '';
  document.getElementById('cert_year').value = cert.year || '';
  document.getElementById('cert_badge_text').value = cert.badge_text || '';
  document.getElementById('cert_sort_order').value = cert.sort_order || 0;
  document.getElementById('cert_credential_url').value = cert.credential_url || '';

  modal.classList.add('active');
}

function closeModal() {
  modal.classList.remove('active');
}

// Close modal when clicking background
modal.addEventListener('click', function(e) {
  if (e.target === modal) closeModal();
});
</script>
@endsection
