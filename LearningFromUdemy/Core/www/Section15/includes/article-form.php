<?php if (!empty($errors)): ?>
<ul>
    <?php foreach ($errors as $error): ?>
    <li><?= $error ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>

<form method="post">
    <!-- we use POST method because this script will insert into database -->
    <table>
        <!-- TITLE -->
        <tr>
            <td>
                <label for="Title">Title:</label>
            </td>
            <td>
                <!-- 10 -->
                <input type="text" name="title" id="Title" placeholder="Article's title"
                    value="<?= htmlspecialchars($title) ?>" />
            </td>
        </tr>
        <!-- CONTENT of the ARTICLE -->
        <tr>
            <td>
                <label for="Content">Content:</label>
            </td>
            <td>
                <!-- 10 -->
                <textarea name="content" cols="40" rows="4" id="Content"
                    placeholder="Article's Content"><?= htmlspecialchars($content) ?></textarea>
            </td>
        </tr>
        <!-- Date Publication -->
        <tr>
            <td>
                <label for="Published_date">Publication Date and Time:</label>
            </td>
            <td>
                <!-- 10 -->
                <input type="datetime-local" name="published_at" id="Published_date"
                    value="<?= htmlspecialchars($published_at) ?>" />
            </td>
        </tr>

        <!-- Submit Button -->
        <tr>
            <td><button>Send</button></td>
        </tr>
    </table>
</form>