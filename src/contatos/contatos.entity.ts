import { Entity, Column, PrimaryGeneratedColumn } from 'typeorm';
@Entity('pessoas')// nome da tabela no banco de dados
export class Contatos {
@PrimaryGeneratedColumn()
id_user: number;
@Column()
senha_user: string;
@Column()
email_user: string;
}