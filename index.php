<?php
phpinfo();
?>












<nav>
        <ul>
            <?php if($page > 1): ?>
            <li>
                <a href="?page=<?php echo $page-1; ?>&limit=<?php echo $limit; ?>">Previous</a>
            </li>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li>
                <a href="?page=<?php echo $i; ?>&limit=<?php echo $limit; ?>"><?php echo $i; ?></a>
            </li>
            <?php endfor; ?>

            <?php if($page < $totalPages): ?>
            <li>
                <a href="?page=<?php echo $page+1; ?>&limit=<?php echo $limit; ?>">Next</a>
            </li>
            <?php endif; ?>
        </ul>
    </nav>  