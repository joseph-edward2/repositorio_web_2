import { Controller, Get } from '@nestjs/common';
import { ContatosService } from './contatos.service';
@Controller('contatos')
export class ContatosController {
constructor(private readonly usuarioService: ContatosService) {}
@Get()
findAll() {
return this.usuarioService.findAll();
}
}