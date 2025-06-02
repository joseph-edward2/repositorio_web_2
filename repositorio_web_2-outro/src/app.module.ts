import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { Contatos } from './contatos/contatos.entity';

import { ContatosModule } from './contatos/contatos.module';
@Module({
imports: [
TypeOrmModule.forRoot({
type: 'mysql',
host: 'localhost',
port: 3306,
username: 'root',
password: '', // ou '123', dependendo do seu XAMPP
database: 'login',
entities: [Contatos],
synchronize: true, // em produção, mude para false
}),
ContatosModule,
ContatosModule,
],
})
export class AppModule {}