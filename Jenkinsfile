pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        dir(path: './ansible') {
          sh 'ansible-galaxy install -r requirements.yml'
        }

      }
    }
    stage('Plan') {
      steps {
        input 'Apply previous plan?'
        sh 'echo \'Passou\''
      }
    }
  }
}