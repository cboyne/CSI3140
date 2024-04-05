<!DOCTYPE html>

<html>
    <body>
        <?php
            function validateEmail($email) {
                $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
            
                if (preg_match($pattern, $email)) {
                    return true;
                } else {
                    return false;
                }
            }
            
            // Test valid email addresses
            $validEmails = [
                'john@example.com',
                'alice.doe123@example.co.uk',
                'info+test@example.net',
            ];
            
            echo "Valid email addresses:\n";
            foreach ($validEmails as $email) {
                if (validateEmail($email)) {
                    echo "$email is valid.\n";
                } else {
                    echo "$email is invalid.\n";
                }
            }
            
            // Test invalid email addresses
            $invalidEmails = [
                'notAnEmail',
                'john@.com',
                '@example.com',
                'john@example',
                'john@example.',
            ];
            
            echo "\nInvalid email addresses:\n";
            foreach ($invalidEmails as $email) {
                if (validateEmail($email)) {
                    echo "$email is valid.\n";
                } else {
                    echo "$email is invalid.\n";
                }
            }
            
        ?>
    </body>
</html>