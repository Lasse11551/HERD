<!DOCTYPE html>
<html>
    <head>
        <title>Transactions</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
                text-align: center;
            }
            table tr th, table tr td {
                padding: 5px;
                border: 1px #eee solid;
            }
            tfoot tr th, tfoot tr td {
                font-size: 20px;
            }
            tfoot tr th {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Check #</th>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($transactions)): ?>
                    <?php foreach($transactions as $transtion): ?>
                        <tr>
                            <td><?= formatDate($transtion['date'])?></td>
                            <td><?= $transtion['checkNumber']?></td>
                            <td><?= $transtion['description']?></td>
                            <td>
                                <?php if($transtion['amount'] < 0): ?>
                                    <span style="color: red;">
                                        <?= formatDollarAmount($transtion['amount'])?>
                                    </span>
                                <?php elseif ($transtion['amount'] > 0): ?>
                                    <span style="color: green;">
                                        <?= formatDollarAmount($transtion['amount'])?>
                                    </span>
                                <?php else: ?>
                                    <?= formatDollarAmount($transtion['amount'])?>
                                <?php endif?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php endif ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total Income:</th>
                    <td><?=formatDollarAmount($totals['totalIncome'] ?? 0 )?></td>
                </tr>
                <tr>
                    <th colspan="3">Total Expense:</th>
                    <td><?=formatDollarAmount($totals['totalExpense'] ?? 0 )?></td>
                </tr>
                <tr>
                    <th colspan="3">Net Total:</th>
                    <td><?=formatDollarAmount($totals['netTotal'] ?? 0) ?></td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>