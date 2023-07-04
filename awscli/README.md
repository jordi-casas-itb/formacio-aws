# AWS CLI

AWS ofereix una consola que permet operar les mateixes funcions que es permet via menús d'una forma programàtica

## Instàncies EC2

Llistar totes les instàncies de la regió us-east-1: `aws ec2 describe-instances --region us-east-1`

Arrencar la instància amb id i-00010940c0b40c40b: `aws ec2 start-instances --instance-ids i-00010940c0b40c40b`

Parar la instància amb id i-00010940c0b40c40b: `aws ec2 stop-instances --instance-ids i-00010940c0b40c40b`

## Buckets S3

Copiar fitxers d'una EC2 a un bucket de S3: `aws s3 cp /home/ec2-user/eb-laravel/ s3://jcb-ec2/eb-laravel --recursive`

Llistar el contingut d'un bucket: `aws s3 ls s3://jcb-ec2/eb-laravel/`

Esborrar un fitxer d'un S3: `aws s3 rm s3://jcb-ec2/.env`
