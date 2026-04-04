pipeline {
    agent any

    stages {
        stage('Setup') {
            steps {
                bat 'git config --global --add safe.directory C:/xampp/htdocs/euro'
            }
        }

        stage('Pull Code') {
            steps {
                bat 'git pull origin main'
            }
        }

        stage('Install') {
            steps {
                bat 'composer install --no-interaction --prefer-dist'
            }
        }

        stage('Migrate') {
            steps {
                bat 'php artisan migrate --force'
            }
        }
        stage('Test') {
            steps {
                bat 'php artisan test'
            }
        }
    }
}