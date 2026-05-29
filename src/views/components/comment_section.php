<?php
// $task_id dan $pdo harus sudah tersedia saat komponen ini dipanggil
require_once __DIR__ . '/../../../src/controllers/CommentController.php';
$comments = getCommentsByTask($pdo, $task_id);
?>

<div class="mt-4 border-t pt-3">
    <h4 class="text-sm font-semibold text-gray-600 mb-2">💬 Komentar</h4>

    <!-- Daftar komentar -->
    <div class="space-y-2 max-h-40 overflow-y-auto mb-3">
        <?php if (empty($comments)): ?>
            <p class="text-xs text-gray-400 italic">Belum ada komentar.</p>
        <?php else: ?>
            <?php foreach ($comments as $c): ?>
                <div class="bg-gray-100 rounded p-2 text-xs">
                    <span class="font-semibold text-indigo-600">
                        <?= htmlspecialchars($c['username']) ?>
                    </span>
                    <span class="text-gray-400 ml-1">
                        <?= date('d M, H:i', strtotime($c['created_at'])) ?>
                    </span>
                    <p class="text-gray-700 mt-1">
                        <?= htmlspecialchars($c['comment_text']) ?>
                    </p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- Form kirim komentar baru -->
    <form action="../../src/controllers/CommentController.php" method="POST">
        <input type="hidden" name="task_id" value="<?= $task_id ?>">
        <textarea
            name="comment_text"
            rows="2"
            placeholder="Tulis komentar..."
            class="w-full text-xs border rounded p-2 focus:outline-none focus:ring-1 focus:ring-indigo-400 resize-none"
        ></textarea>
        <button
            type="submit"
            class="mt-1 px-3 py-1 bg-indigo-500 text-white text-xs rounded hover:bg-indigo-600"
        >
            Kirim
        </button>
    </form>
</div>