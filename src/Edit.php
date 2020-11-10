<?php

namespace KCS;

use PDO;

class Edit
{
    private PDO $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function viewEditForm(int $id): void
    {
        $stmt = $this->conn->prepare('SELECT * FROM persons WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $asmuo = $stmt->fetch();
        echo "
            <form action='./?action=Update' method='post'>
                <input type='hidden' name='id' value='{$asmuo['id']}' />
                Vardas: <input type='text' name='first_name' value='{$asmuo['first_name']}' /><br>
                Pavarde: <input type='text' name='last_name' value='{$asmuo['last_name']}' /><br>
                El. pastas: <input type='text' name='email' value='{$asmuo['email']}' /><br>
                Tel. nr.: <input type='text' name='phone' value='{$asmuo['phone']}' /><br>
                <input type='submit' value='Atnaujinti'>
            </form>
            [<a href='./'>ATGAL</a>]
        ";
    }

    public function viewCreateForm(): void
    {
        echo " <h1>Registracijos forma</h1>
            <form action='/php/db.php?action=Store' method='post'>
                <input type='hidden' name='id' value='' />
                Vardas: <input type='text' name='first_name' value='' /><br>
                Pavarde: <input type='text' name='last_name' value='' /><br>
                El.pastas: <input type='text' name='email' value='' /><br>
                Slaptazodis: <input type='password' name='password' value='' /><br>
                Prisijungimo vardas: <input type='text' name='login_name' value='' /><br>
                <input type='submit' value='Registruotis'>
            </form>
            <button class='button'><a href='./'>Uždaryti registracijos formą</a></button>
        ";
    }
}
