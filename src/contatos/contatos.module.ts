import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { Contatos } from './contatos.entity';
import { ContatosService } from './contatos.service';
import { ContatosController } from './contatos.controller';
@Module({
imports: [TypeOrmModule.forFeature([Contatos])], // <-- aqui está a mágica!
providers: [ContatosService],
controllers: [ContatosController],
})
export class ContatosModule {}