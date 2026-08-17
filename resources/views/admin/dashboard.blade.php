@extends('admin.layout')

@section('title', 'Dashboard Overview')

@section('styles')
<style>
.stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 20px;
  margin-bottom: 32px;
}
.stat-card {
  background: var(--navy-900);
  border: 1px solid var(--line-strong);
  border-radius: 16px;
  padding: 24px;
}
.stat-card h3 {
  font-size: 13px;
  font-family: 'JetBrains Mono', monospace;
  text-transform: uppercase;
  color: var(--ink-400);
  margin-bottom: 12px;
}
.stat-card .val {
  font-size: 36px;
  font-weight: 800;
  color: var(--cyan);
}
.action-card {
  background: linear-gradient(135deg, rgba(16, 34, 86, 0.6), rgba(5, 12, 33, 0.9));
  border: 1px solid var(--line-strong);
  border-radius: 16px;
  padding: 28px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 32px;
}
.action-card h2 {
  font-size: 20px;
  color: var(--ink-100);
  margin-bottom: 6px;
}
.action-card p {
  color: var(--ink-400);
  font-size: 14px;
}
.btn-primary {
  padding: 12px 24px;
  background: var(--cyan);
  color: #03150d;
  font-weight: 700;
  border-radius: 10px;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: all 0.2s;
}
.btn-primary:hover {
  background: #5cf0ac;
  transform: translateY(-2px);
}
</style>
@endsection

@section('content')
<div class="stats-grid">
  <div class="stat-card">
    <h3>Total Certifications</h3>
    <div class="val">{{ $totalCerts }}</div>
  </div>
  <div class="stat-card">
    <h3>Admin Status</h3>
    <div class="val" style="font-size: 24px; color: var(--green);">Active 🟢</div>
  </div>
  <div class="stat-card">
    <h3>Live Frontend</h3>
    <div class="val" style="font-size: 24px; color: var(--blue);">Connected ⚡</div>
  </div>
</div>

<div class="action-card">
  <div>
    <h2>Manage Credentials & Training</h2>
    <p>Upload certificate images, update issuers, dates, badges, or add new certifications to your portfolio.</p>
  </div>
  <a href="{{ route('admin.certifications.index') }}" class="btn-primary">Manage Certifications →</a>
</div>
@endsection
