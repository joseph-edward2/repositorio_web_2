import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { Contatos } from './contatos.entity';
@Injectable()
export class ContatosService {
constructor(
@InjectRepository(Contatos)
private contatosRepository: Repository<Contatos>,
) {}
findAll(): Promise<Contatos[]> {
return this.contatosRepository.find();
}
}